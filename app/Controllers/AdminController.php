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
    public function dashBoard()
    {
        $data['title'] = 'Kemi Advocates | Dashboard';

        return view('admin/dashboard', $data);
    }

}