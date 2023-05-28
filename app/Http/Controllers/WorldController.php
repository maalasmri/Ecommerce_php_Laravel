<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
class WorldController extends Controller
{


    public function invoice(Request $req){
    

        $row=[
           
            'FirstName'=>$req->firstName,
            'LastName'=> $req->lastName,
            'Phone'=> $req->phone,
            'country'=>$req->countrySelect,
            'City'=> $req->citySelect,
            'Street'=> $req->Street,
            'ProductName'=> $req->product,
            'Total'=> $req->total ,
            'Img'=> $req->img ,
            'Color'=> $req->color ,
            'Specifications'=> $req->specifications ,
            'Tax'=> $req->tax ,
            'Price'=> $req->price ,

        ];
        

        DB::table('user_invoice')->insert($row);

        
        $date=DB::table('user_invoice')
        ->where('Phone' , '=', $req->phone)
        ->first();


        return view('invoice' , ['inv'=>$date]);
    }

    public function CheckOut($id){
        $phone=DB::table('products')
        ->where('id', '=',$id)->first();
         return view('checkout' , ['aa'=>$phone]);
        

    }
    public function PhoneType(){


$phone=DB::table('products')
->get();
        return view('product' , ['aa'=>$phone]);


    }
}