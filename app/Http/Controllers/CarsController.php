<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mechanics;
use App\Models\owners;
use App\Models\cars;
class CarsController extends Controller
{
    public function add_cars($id){
        $mechanics=mechanics::find($id);
        $cars=new cars();
        $cars->model="i10";
        $mechanics->cars()->save($cars);
    }
}
