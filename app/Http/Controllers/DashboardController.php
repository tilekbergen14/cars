<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(){
        return view("dashboard");
    }
    public function createimg(Request $request){
        $this->validate($request, [
            "name" => "required",
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $imagePath = $request->existedImage ?? null;
        if ($request->image) {
            $imageName = time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('images/thumbnails'), $imageName);
            if($imagePath){
                File::delete(public_path($imagePath));
            }
            $imagePath = "/images/thumbnails/" . $imageName;
        }
        Image::create([
            "user_id" => $request->user()->id,
            "name" => $request->name,
            "image" => $imagePath
        ]);

        return back();
    }
    public function deleteimg(Image $image){
        $image->delete();
        return back();
    }
}
