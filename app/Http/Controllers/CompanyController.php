<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{

public function index(){
    return view('pages.home');
}

public function registerCompany(){
return view('pages.register-company');

}



} 