<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    /**
     * Halaman Dashboard
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Halaman Calendar
     */
    public function calendar()
    {
        return view('admin.calendar');
    }

    /**
     * Halaman Form Elements
     */
    public function forms()
    {
        return view('admin.forms');
    }

    /**
     * Halaman Login
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * Halaman Data Tables
     */
    public function datatables()
    {
        return view('admin.datatables');
    }

    /**
     * Halaman Sweet Alerts
     */
    public function sweetalerts()
    {
        return view('admin.sweetalerts');
    }
}
