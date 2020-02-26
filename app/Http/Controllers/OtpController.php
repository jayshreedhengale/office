<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function makeRequest(Request $req)
{
        $client = new Client();
        $otp=rand(10000,4);
        // $data=
        $data = array('mobilenumber'=>$req->txtnumber);

        //CHANGES
        User::where('phone_number',$req->txtnumber)->update(['otp'=>$otp]);


        $response = $client->request('POST','http://192.168.1.9/jaincountapi/public/api/otpsms',[
        'form_params'=>[
            'mobilenumber'=>$req->txtnumber,
            'otp'=>$otp
        ]
        ]);
        $response = $response->getBody();
        return json_decode($response,true);
}
}
