<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(){
        $images = Image::orderBy("created_at", "desc")->get();
        return view("cars", ["images" => $images]);
    }
}
