<?php namespace App\Controllers;

class MainController extends BaseController
{
    //=================Home Page====================
    public function index()
    {
        $data['title'] = 'Kemi Advocates';
        return view('pages/homePage', $data);
    }

    //=================About Page====================
    public function about()
    {
        $data['title'] = 'Kemi Advocates | About Us';

        return view('pages/about', $data);
    }

}