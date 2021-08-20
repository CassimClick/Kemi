<?php namespace App\Controllers;

use App\Libraries\CommonTasks;
use App\Models\BlogModel;

class BlogController extends BaseController
{
    public $blogModel;
    public $session;
    public $commonTask;

    public function __construct()
    {
        $this->blogModel = new BlogModel();
        $this->commonTask = new CommonTasks();

        helper('date');
        $this->session = session();
        helper(['form']);
    }

    public function index()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        $data['page'] = [
            'title' => 'blogs',
            'heading' => 'blogs',
        ];

        $data['blogs'] = $this->blogModel->getAllBlogs();

        return view('admin/blog', $data);
    }
//=================Publishing new blog====================
    public function publishBlog()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        if ($this->request->getMethod() == 'post') {
            $file = $this->request->getFile('image-file');
            $blogId = md5(str_shuffle('abcdefghijklm567820341yriABXIENCOE'));

            if ('' == $file) {
                $blog = [
                    'title' => $this->request->getVar('title'),
                    'blog_id' => $blogId,

                    'description' => $this->request->getVar('description'),
                    'image_url' => '',
                ];

                $request = $this->blogModel->saveData($blog);

                if ($request) {
                    echo ('blog Published');
                } else {
                    echo ('Something Went Wrong');
                }
            } else {
                $blog = [
                    'title' => $this->request->getVar('title'),
                    'blog_id' => $blogId,
                    'description' => $this->request->getVar('description'),
                    'image_url' => $this->commonTask->processFile($file),
                ];

                $request = $this->blogModel->saveData($blog);

                if ($request) {
                    echo ('blog Published');
                } else {
                    echo ('Something Went Wrong');
                }

            }

        }
        return redirect()->to('blog');
        //return view('Admin/blogs');
    }
    //=================All blogs====================
    public function allBlogs()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        $data['page'] = [
            'title' => 'All blogs',
            'heading' => ' All blogs',
        ];
        //$data['xxx'] = [3,69,6696,56];

        $data['allBlogs'] = $this->blogModel->getAllBlogs();

        return view('Pages/allBlogs', $data);
    }
//=================get a single blog blogs====================
    public function singleBlog($id)
    {
        $data['page'] = [
            'title' => 'blog',
            'heading' => 'blog',
        ];

        $data['theBlog'] = $this->blogModel->getSingleBlog($id);

        return view('pages/singleBlog', $data);
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
            $request = $this->blogModel->updateBlog($theId, $blog);

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
            $result = $this->blogModel->singleBlog($blogId);

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
            $result = $this->blogModel->deleteBlog($blogId);

            echo json_encode('blog Deleted...');

        }
    }

}