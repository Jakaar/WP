<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\FAQ;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Helper\LogActivity;

class FAQController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        dd($request->all());

    }
}
