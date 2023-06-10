<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function uploadPost(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $image = new \App\Models\Image;
        $image->name = $imageName;
        $image->url = 'https://raw.githubusercontent.com/tomokamura/ponta-api/main/public/images/' . $imageName;

        $image->save();
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }

    public function getImage($id)
    {
        $image = \App\Models\Image::find($id);
        if ($image) {
            return response()->json(['url' => asset($image->url)]);
        } else {
            return response()->json(['error' => 'Image not found'], 404);
        }
    }
    public function index()
    {
        $images = \App\Models\Image::all();
        return view('image', compact('images'));
    }
}


