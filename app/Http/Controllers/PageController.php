<?php
/**
 * Created by PhpStorm.
 * User: eudee
 * Date: 27/10/2018
 * Time: 17:14
 */

namespace App\Http\Controllers;


class PageController extends Controller
{

    public function index()
    {

        return view('home');
    }
    public function about(){
        return view('about');
    }
}