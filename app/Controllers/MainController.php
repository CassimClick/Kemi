<?php namespace App\Controllers;

use App\Models\BlogModel;

class MainController extends BaseController
{
    public $blogModel;
    public function __construct()
    {
        $this->blogModel = new BlogModel();

        helper('date');
        $this->session = session();

    }
    //=================Home Page====================
    public function index()
    {
        $data['title'] = 'Home Page';
        $data['blogs'] = $this->blogModel->getAllBlogs();

        return view('pages/homePage', $data);

    }

    //=================About Page====================
    public function about()
    {
        $data['title'] = 'About Us';

        return view('pages/about', $data);
    }
    //=================contact Page====================
    public function contact()
    {
        $data['title'] = 'Contact Us';

        return view('pages/contact', $data);
    }
    //=================News Page====================
    public function news()
    {
        $data['title'] = 'News';

        return view('pages/allNews', $data);
    }
    //=================News Details====================
    public function newsDetails()
    {
        $data['title'] = 'News';

        return view('pages/newsDetails', $data);
    }
    //=================publications page====================
    public function publications()
    {
        $data['title'] = 'Publications';

        return view('pages/publications', $data);
    }
    //=================publications details====================
    public function publicationDetails()
    {
        $data['title'] = 'Publications';

        return view('pages/publicationDetails', $data);
    }

    //=================INNER PAGES====================

    //=================corporate ====================
    public function corporate()
    {
        $data['title'] = 'Corporate Law';

        return view('pages/corporate', $data);
    }
    //=================real estate ====================
    public function realEstate()
    {
        $data['title'] = 'Real Estate Law and Conveyance ';

        return view('pages/realEstate', $data);
    }
    //=================ngo ====================
    public function ngo()
    {
        $data['title'] = 'Non-Profit and NGO Advocacy and Counseling ';

        return view('pages/ngo', $data);
    }
    //=================banking ====================
    public function banking()
    {
        $data['title'] = 'Banking and Finance  ';

        return view('pages/banking', $data);
    }
    //=================employment====================
    public function employment()
    {
        $data['title'] = 'Employment, Labor and Immigration';

        return view('pages/employment', $data);
    }
    //=================litigation====================
    public function litigation()
    {
        $data['title'] = 'Litigation and ADR ';

        return view('pages/litigation', $data);
    }
    //=================private client====================
    public function privateClient()
    {
        $data['title'] = 'Private Client Services ';

        return view('pages/privateClient', $data);
    }
    //=================tax====================
    public function tax()
    {
        $data['title'] = 'Tax Laws ';

        return view('pages/tax', $data);
    }
    //=================competition====================
    public function competition()
    {
        $data['title'] = 'Competition Laws, Mergers & Acquisition ';

        return view('pages/competition', $data);
    }
    //=================energy====================
    public function energy()
    {
        $data['title'] = 'Energy Oil, Gas & Mining';

        return view('pages/energy', $data);
    }
    //=================shipping====================
    public function shipping()
    {
        $data['title'] = 'shipping & International Trade Law';

        return view('pages/shipping', $data);
    }

}