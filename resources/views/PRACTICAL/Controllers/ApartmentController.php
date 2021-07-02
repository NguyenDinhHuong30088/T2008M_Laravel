<?php

namespace resources\view\PRACTICAL\Controllers;

use App\Apartment;

class ApartmentController extends Controller
{
    public function all(){
        $apartment = Apartment::all();
        return view("apartment.list2",[
            "apart"=>$apartment
        ]);
    }
}
