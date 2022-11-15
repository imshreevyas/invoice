<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class VendorController extends Controller{

    public function index(){
        return view('vendor/index');
    }

    public function login(){
        return view('vendor.auth.login');
    }
}