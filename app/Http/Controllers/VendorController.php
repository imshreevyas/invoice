<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class VendorController extends Controller{

    //  All Views
    public function index(){
        return view('vendor/index');
    }

    public function login(){
        return view('vendor.auth.login');
    }

    public function Register(){
        return view('vendor.auth.register');
    }

    public function dashboard(){
        return view('vendor.auth.index');
    }

    public function clients(){
        return view('vendor.auth.login');
    }

    public function addClients(){
        return view('vendor.auth.login');
    }

    public function allInvioce(){
        return view('vendor.auth.login');
    }

    public function addInvoice(){
        return view('vendor.auth.login');
    }

    public function profile(){
        return view('vendor.auth.login');
    }

    public function forgotpass(){
        return view('vendor.auth.login');
    }

    public function logout(){
        return view('vendor.auth.login');
    }

    // All Post Functions

    public function validate_vendor(Request $request){
        dd($request);
    }
}