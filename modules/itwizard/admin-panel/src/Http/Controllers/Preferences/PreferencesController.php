<?php

namespace Itwizard\Adminpanel\Http\Controllers\Preferences;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Spatie\Activitylog\Models\Activity;
use App\Helper\LogActivity;

class PreferencesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = DB::table('wpanel_settings')->orderby('order', 'ASC')->get()->groupBy('group');
        $group = DB::table('wpanel_settings')->select('group')->orderby('group', 'ASC')->groupBy('group')->get();


        return view('Admin::pages.preferences.index', [
            'model' => $data,
            'group' => $group,
        ]);
    }

    public function logger(Request $request)
    {
        $logs = \App\LogActivity::whereDate('created_at', '<=', now()->format('Y-m-d h:i:s'))->orderby('created_at', 'DESC')->get();

        return view('Admin::pages.preferences.logger', [
            'logs' => $logs,
        ]);
    }

    public function menu() {
        $model = \App\AdminMenu::where('parent_id',null)->where('is_active', 1)->orderby('order','ASC')->get();
        return view('Admin::pages.preferences.menu',[
            'model' => $model,
        ]);
    }

    public function board_type() {
        $board_type=DB::table('wpanel_board_type')->get();
        return view('Admin::pages.preferences.board_type',compact('board_type'));
    }
}
