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
    //=================News Page====================
    public function news()
    {
        $data['title'] = 'Kemi Advocates | News';

        return view('pages/allNews', $data);
    }
    //=================News Details====================
    public function newsDetails()
    {
        $data['title'] = 'Kemi Advocates | News';

        return view('pages/newsDetails', $data);
    }
    //=================publications page====================
    public function publications()
    {
        $data['title'] = 'Kemi Advocates | Publications';

        return view('pages/publications', $data);
    }
    //=================publications details====================
    public function publicationDetails()
    {
        $data['title'] = 'Kemi Advocates | Publications';

        return view('pages/publicationDetails', $data);
    }

}