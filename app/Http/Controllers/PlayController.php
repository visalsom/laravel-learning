<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayController extends Controller
{
    public function index() {
        $data = array(
            'title' => "Playground Blade Template",
            'cover' => ['@if', '@foreach', '@for', '@unless']
        );
        return view('pages.playground')->with($data);
    }
}
