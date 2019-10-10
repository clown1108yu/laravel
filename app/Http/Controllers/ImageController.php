<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Image;

use Illuminate\Http\Request;

class ImageController extends Controller
{
	public function index()
	 {
 		$images = Image::all();
		dd($images);
        	return view('image.index')->with([ "images" => $images
		]);
    	}
    public function store(Request $request)
    {
        $image = new Image();
        $uploadImg = $request->image;
        if($uploadImg->isValid()) {
            $filePath = $uploadImg->store('public');
            $image->image = str_replace('public/', '', $filePath);
        }
        $image->save();
        return redirect('/');
    }
}
