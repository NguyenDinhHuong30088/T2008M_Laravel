<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    //
    public function all(){
        $apartment=Apartment::all();
        return view("home",[
            "apart"=>$apartment
        ]);
    }

}
