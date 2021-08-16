<?php namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    public $BlogModel;
    public $session;

    public function __construct()
    {
        $this->BlogModel = new BlogModel();
        helper('date');
        $this->session = session();
    }
    public function dashBoard()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        $data['page'] = [
            'title' => 'Admin Dashboard',
            'heading' => 'Admin Dashboard',
        ];
        return view('Admin/admin', $data);
    }
    public function blogs()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        $data['page'] = [
            'title' => 'blogs',
            'heading' => 'blogs',
        ];

        $data['blogs'] = $this->BlogModel->getAllBlogs();

        return view('Admin/blogs', $data);
    }
//=================Publishing new blog====================
    public function publishBlog()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        if ($this->request->getMethod() == 'post') {

            $blog = [
                'title' => $this->request->getVar('title'),
                'date' => $this->request->getVar('date'),
                'description' => $this->request->getVar('description'),
            ];

            //echo json_encode($blog);
            $request = $this->BlogModel->saveData($blog);

            if ($request) {
                echo json_encode('blog Published');
            } else {
                echo json_encode('Something Went Wrong');
            }

        }
    }
    //=================Update existing blog====================
    public function updateBlog()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        if ($this->request->getMethod() == 'post') {
            $theId = $this->request->getVar('theId');
            $blog = [
                'title' => $this->request->getVar('title'),
                'date' => $this->request->getVar('date'),
                'description' => $this->request->getVar('description'),
            ];

            //echo json_encode($blog);
            $request = $this->BlogModel->updateBlog($theId, $blog);

            if ($request) {
                echo json_encode('blog Updated');
            } else {
                echo json_encode('Something Went Wrong');
            }

        }
    }

    public function viewSingleBlog()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        if ($this->request->getMethod() == 'post') {
            $blogId = $this->request->getVar('id');
            $result = $this->BlogModel->singleBlog($blogId);

            echo json_encode($result);

        }
    }
    public function deleteBlog()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        if ($this->request->getMethod() == 'post') {
            $blogId = $this->request->getVar('id');
            $result = $this->BlogModel->deleteBlog($blogId);

            echo json_encode('blog Deleted...');

        }
    }

    public function events()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        $data['page'] = [
            'title' => 'Events',
            'heading' => 'Events',
        ];
        return view('Admin/events', $data);
    }

}