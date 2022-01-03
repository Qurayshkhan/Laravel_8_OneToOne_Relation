<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mechanics;
use App\Models\owners;
use App\Models\cars;

class MechanicsController extends Controller
{
    public function add_mechanics(){
        $mechanics=new mechanics();
        $mechanics->name='Ali';
        $mechanics->save();
    }
}
