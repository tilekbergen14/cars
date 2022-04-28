<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->middleware(function ($request, $next) {
            if(!Auth::user()->role === "admin"){
                return redirect()->route('home');
            }
            return $next($request);
        });
    }
    public function index(){
        $images = Image::orderBy("created_at", "desc")->get();
        return view("admin.index", ["images" => $images]);
    }

    public function createimg(){
        $image = null;
        return view("admin.createimg", ["image" => $image]);
    }
}
