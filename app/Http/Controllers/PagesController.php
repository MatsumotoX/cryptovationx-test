<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        return view('landing_page.landingpage');
    }
    public function getKYC(){
        return view('kyc.kyc');
    }
    public function getFaq(){
        return view('faq.faq');
    }

}
