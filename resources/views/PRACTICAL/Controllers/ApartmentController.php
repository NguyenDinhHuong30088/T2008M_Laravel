<?php

namespace resources\view\PRACTICAL\Controllers;

use resources\view\PRACTICAL\Controllers\Apartment;

class ApartmentController extends Controller
{
    public function all(){
        $apartment = Apartment::all();
        return view("home",[
            "apart"=>$apartment
        ]);
    }
}
