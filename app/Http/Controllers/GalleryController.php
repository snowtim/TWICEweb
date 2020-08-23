<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //

    public function galleryindex() {
    	return view('gallery.gallery');
    }
}
