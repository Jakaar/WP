<?php

namespace Itwizard\Adminpanel\Http\Controllers\ContactUs;


use Illuminate\Routing\Controller;

class ContactUsController extends Controller
{
    public function index()
    {
//        dd("hi");
        return view('Admin::pages.contactus.contact-us');
    }
}
