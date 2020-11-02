<?php

namespace App\Http\Controllers;

use App\ActiveLicense;
use Illuminate\Http\Request;

class ActiveLicenseController extends Controller
{
    public function addForm(){
        return view('license.license-active-form');
    }
    public function activeLicense(Request $request){
           $this->validate($request,[
                 'license_key' => 'required'
           ]);
           $data = new ActiveLicense();
           $data->license_key = $request->license_key;
           $data->save();
           return back()->with('message','Congrats! Your license actvated successfully');
    }
}
