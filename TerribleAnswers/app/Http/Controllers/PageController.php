<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return "About Us Page";
    }

    public function contact(){
        return "Contact Us Page";
    }

    public function contactPost(){
        return "Submitted Contact form";
    }
}
