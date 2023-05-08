<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function testshow()
    {
        return view('admin.pages.testimonial');
    }
    //
}
