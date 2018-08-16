<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Welcome to laravel';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    /**
     * about page
     *
     */
    public function about()
    {
        return view('pages.about');
    }
     /**
     * services page
     *
     */
    public function services()
    {
        return view('pages.services');
    }
}
