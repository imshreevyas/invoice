<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;

class VendorController extends Controller
{

    //  All Views
    public function index()
    {
        return view('vendor/index');
    }

    public function login()
    {
        return view('vendor.auth.login');
    }

    public function Register()
    {
        return view('vendor.auth.register');
    }

    public function dashboard()
    {
        return view('vendor.auth.index');
    }

    public function clients()
    {
        return view('vendor.auth.login');
    }

    public function addClients()
    {
        return view('vendor.auth.login');
    }

    public function allInvioce()
    {
        return view('vendor.auth.login');
    }

    public function addInvoice()
    {
        return view('vendor.invoice.addInvoice');
    }

    public function profile()
    {
        return view('vendor.auth.login');
    }

    public function forgotpass()
    {
        return view('vendor.auth.login');
    }

    public function logout()
    {
        return view('vendor.auth.login');
    }

    // All Post Functions

    public function validate_vendor(Request $request)
    {

        // dd($request->all());
        $validation = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validation->fails())
            return response()->json(['type' => 'error', 'message' => $validation->errors()->all()], 403);
        

        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
            $vendor = Auth::vendorModel();
            $token = $vendor->createToken('VendorToken')->accessToken();
            dd('sadas');
            return response()-json(['token' => $token], 200);
        }

    }

    public function add_invoice(Request $request)
    {
        echo 'fdssdf';
    }
}
