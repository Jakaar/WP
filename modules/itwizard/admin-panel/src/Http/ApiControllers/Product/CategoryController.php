<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getData(Request $request)
    {

        $model = \App\ProductCategory::where('id', $request->id)->first();
        if ($model->parent_id != null) {
            $data = \App\ProductCategory::where('id', $model->parent_id)->where('is_active',1)->first();
            $parent = \App\ProductCategory::where('parent_id', $data->parent_id)->where('is_active',1)->get();
        }
        else{
            $parent = \App\ProductCategory::where('parent_id',null)->where('is_active',1)->get();
        }

        return response()->json([
            'msg' => 'Success',
            'data' => $model,
            'parent' => $parent,
        ]);
    }

    public function create(Request $request)
    {
        try {
            $model = new \App\ProductCategory;
            $model->name = $request->name;
            $model->is_active = $request->is_active;
            $model->parent_id = $request->parent_id;
            $model->save();

            return response()->json(['msg', 'Success']);
        } catch (\Exception $e) {
            return response()->json('msg', $e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $model = \App\ProductCategory::find($request->id);
            $model->is_active = 2;
            $model->save();
            return response()->json(['msg', 'Success']);
        } catch (\Exception $e) {
            return response()->json('msg', $e);
        }
    }

    public function update(Request $request){
        try {
            $model = \App\ProductCategory::find($request->id);
            $model->name = $request->name;
            $model->is_active = $request->is_active;
            $model->parent_id = $request->parent_id;
            $model->order = $request->order;
            $model->save();
            return response()->json(['msg' => 'Success']);

        } catch (\Exception $e) {
            return response()->json(['msg' => $e]);
        }
    }
}
