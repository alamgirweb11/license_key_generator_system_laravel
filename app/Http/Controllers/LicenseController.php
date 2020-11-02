<?php

namespace App\Http\Controllers;

use App\License;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    public function saveValue(Request $request){
            $this->validate($request,[
                'client_id' => 'required',
                'expire_date' => 'required',
                'license_key' => ['required','string','min:14','max:25'],  
            ]);
            $expire_date = Carbon::now()->addMonth($request->expire_date);
            $data = new License();
            $data->client_id = $request->client_id;
            $data->expire_date = $expire_date;
            $data->license_key = $request->license_key;
            $data->save();
           //return $data;
           return back()->with('message','License created successfully');
    }
    public function ShowData(){
               $users = License::all();
               return view('home',['users'=>$users]);
    }
}
