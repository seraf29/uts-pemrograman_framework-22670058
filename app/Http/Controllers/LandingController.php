<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    /**
     * Halaman Home
     */
    public function index()
    {
        return view('landing.index');
    }

    /**
     * Halaman About Us
     */
    public function about()
    {
        return view('landing.about');
    }

    /**
     * Halaman Activities
     */
    public function activities()
    {
        return view('landing.activities');
    }

    /**
     * Halaman Blog
     */
    public function blog()
    {
        return view('landing.blog');
    }

    /**
     * Halaman Contact
     */
    public function contact()
    {
        return view('landing.contact');
    }

    /**
     * Halaman Testimonial
     */
    public function testimonial()
    {
        return view('landing.testimonial');
    }
}
