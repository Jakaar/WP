<?php

namespace Itwizard\Adminpanel\Http\Controllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class ProductCreateController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function CreateItem(Request $request)
    {
        try {
            $validated = $request->all();
            $have = DB::table('main_products')->where('sku', $request->sku)->count();
            if ($have)
            {
                return back()->with('errorA', 'Duplicated Code');
            }
            if ($validated['sku'] === null)
            {
                $rand = mt_rand(1000000000, 9999999999);
//                dd($rand, 'generated');
                $this->SaveProduct($validated, $rand);
                return back()->with('message', 'Successfully Saved');
            }
            if ($have === null)
            {
                $rand = $validated['sku'];
                $this->SaveProduct($validated, $rand);
                return back()->with('message', 'Successfully Saved');
            }
            if ($validated)
            {
                $this->SaveProduct($validated, $request->sku);
                return back()->with('message', 'Successfully Saved');
            }
        } catch (\Exception $exception)
        {
            $this->CreateItem($request);
        }
    }
    public function ProductCodeCheck(Request $request): \Illuminate\Http\JsonResponse
    {
        $rand = mt_rand(0000000000, 9999999999);
//        $generatedCode = substr($rand.$rand.$rand,'0','10');
        $have = DB::table('main_products')->where('sku', $request->code)->first();
        if ($have === null) { return response()->json(['msg'=>'Code Non Duplicated','code'=> $rand], 200); }
        return response()->json(['msg'=>'Code Duplicated','suggest'=> $rand], 200);
    }
    public function SaveProduct($validated, $rand)
    {
//        dd($validated, $rand);
        try {
            DB::table('main_products')->insertGetId([
                'category_id' => $validated['category_id'],
                'sku'=> $rand,
                'name'=>$validated['name'],
                'showing_order'=>isset($validated['showing_order'])? :0,
                'is_status'=> isset($validated['is_status'])? 1 : 0,
                'is_hit'=> isset($validated['is_hit'])? 1 : 0,
                'is_suggest'=> isset($validated['is_suggest'])? 1 : 0,
                'is_new'=> isset($validated['is_new'])? 1 : 0,
                'is_trend'=> isset($validated['is_trend'])? 1 : 0,
                'is_sale'=> isset($validated['is_sale'])? 1 : 0,
                'manufacturer' => $validated['manufacturer'],
                'created_county' => $validated['created_country'],
                'brand_name' => $validated['brand_name'],
                'model_name' => $validated['model_name'],
                'price' => $validated['price'],
                'description' => $validated['description'],
                'main_img' => $validated['main_img'],
                'other_photos' => $validated['thumbnail'],
            ]);
            return true;
        } catch (\Exception $exception)
        {
            return false;
        }
    }
    public function UpdateItem(Request $request, $id)
    {
        $validated = $request->all();
//        dd($validated);
        if ($validated['main_img']){
            DB::table('main_products')->where('id', $id)->update([
                'category_id' => $validated['category_id'],
                'sku'=> $request->sku,
                'name'=>$validated['name'],
                'showing_order'=>isset($validated['showing_order'])? :0,
                'is_status'=> isset($validated['is_status'])? 1 : 0,
                'is_hit'=> isset($validated['is_hit'])? 1 : 0,
                'is_suggest'=> isset($validated['is_suggest'])? 1 : 0,
                'is_new'=> isset($validated['is_new'])? 1 : 0,
                'is_trend'=> isset($validated['is_trend'])? 1 : 0,
                'is_sale'=> isset($validated['is_sale'])? 1 : 0,
                'manufacturer' => $validated['manufacturer'],
                'created_county' => $validated['created_country'],
                'brand_name' => $validated['brand_name'],
                'model_name' => $validated['model_name'],
                'price' => $validated['price'],
                'description' => $validated['description'],
                'main_img' => $validated['main_img'],
                'other_photos' => $validated['thumbnail'],
            ]);
            return back()->with('updated','Code:'.$request->sku.' Name:'.$validated['name'].' Item Has Been Updated');
        }
        DB::table('main_products')->where('id', $id)->update([
            'category_id' => $validated['category_id'],
            'sku'=> $request->sku,
            'name'=>$validated['name'],
            'showing_order'=>isset($validated['showing_order'])? :0,
            'is_status'=> isset($validated['is_status'])? 1 : 0,
            'is_hit'=> isset($validated['is_hit'])? 1 : 0,
            'is_suggest'=> isset($validated['is_suggest'])? 1 : 0,
            'is_new'=> isset($validated['is_new'])? 1 : 0,
            'is_trend'=> isset($validated['is_trend'])? 1 : 0,
            'is_sale'=> isset($validated['is_sale'])? 1 : 0,
            'manufacturer' => $validated['manufacturer'],
            'created_county' => $validated['created_country'],
            'brand_name' => $validated['brand_name'],
            'model_name' => $validated['model_name'],
            'price' => $validated['price'],
            'description' => $validated['description'],
            'other_photos' => $validated['thumbnail'],
        ]);
        return back()->with('updated',$request->sku.' '.$validated->name.' Item Has Been Updated');
    }

}
