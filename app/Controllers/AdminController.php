<?php namespace App\Controllers;

class AdminController extends BaseController
{
    //=================Home Page====================
    public function index()
    {
        $data['title'] = 'Admin Page';
        return view('admin/admin', $data);
    }

    //=================About Page====================
    public function about()
    {
        $data['title'] = 'Kemi Advocates | About Us';

        return view('pages/about', $data);
    }

}