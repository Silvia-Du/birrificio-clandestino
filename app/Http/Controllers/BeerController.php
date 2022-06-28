<?php

namespace App\Http\Controllers;
use App\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function index(){

        $beers=Beer::all();
        return view('birre', compact('beers'));

    }
}
