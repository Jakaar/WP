<?php

namespace Itwizard\Adminpanel\Http\Controllers\ContactUs;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data['contact_us'] = DB::table('wpanel_contact_us')->first();
//        dd("hi");
        return view('Admin::pages.settings.contact-us', compact('data'));
    }
}
