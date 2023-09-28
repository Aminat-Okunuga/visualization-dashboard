<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    // get data from db
    public function getData(){
        // Retrieve data from the database
        $data = Data::all();
        return response()->json($data);
    }
}
