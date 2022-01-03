<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mechanics;
use App\Models\owners;
use App\Models\cars;
class OwnersController extends Controller
{
    public function add_owners($id){
        $cars=cars::find($id);
        $owners=new owners();
        $owners->name="Husnain";
        $cars->owners()->save($owners);
    }
    //Get owner based on Mechnaics ID
    public function show_owners($id){
        $owners=mechanics::find($id)->cars->owners;
        $owners=mechanics::find($id)->owners;
        return $owners;
    }
   
}
