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

    // public function index()
    // {
    //     $data['page'] = [
    //         'title' => 'blogs',
    //         'heading' => 'blogs',
    //     ];

    //     $data['blogs'] = $this->blogModel->getAllBlogs();
    //     return view('admin/blog', $data);

    // }

//=================Publishing new blog====================
    public function index()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }

        $data = [];
        $data['page'] = [
            'title' => 'blogs',
            'heading' => 'blogs',
        ];

        $data['blogs'] = $this->blogModel->getAllBlogs();

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'image' => [
                    'label' => 'image',
                    'rules' => 'uploaded[image]|max_size[image,1024]|ext_in[image,png,jpeg,jpg]',
                    'errors' => [
                        'required' => 'You Must Select A image',
                        'max_size' => 'image Must  Not Exceed 1 Mb',
                        'ext_in[image,png,jpeg,jpg]' => 'Invalid Image Format Please Try Again',
                    ],
                ],
                'title' => [
                    'label' => 'title',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Please Provide Bog Title',

                    ],
                ],
            ];

            // if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                $file = $this->request->getFile('image');

                $blogId = md5(str_shuffle('qweriopasdfghjklzxcvbnm123456789'));
                $blog = [
                    'blog_id' => $blogId,
                    'title' => $this->request->getPost('title'),
                    'category' => $this->request->getPost('category'),
                    'description' => $this->request->getPost('description'),
                    'image_url' => $this->commonTask->processFile($file),
                ];

                // print_r($blog);
                // exit;

                $publish = $this->blogModel->saveData($blog);
                if ($publish) {
                    $this->session->setFlashdata('published', 'Content Published');
                    return redirect()->to(current_url());

                } else {
                    $this->session->setFlashdata('error', 'Fail to Publish');
                    return redirect()->to(current_url());

                }

            } else {
                $data['validation'] = $this->validator;
                // return redirect()->to('blog');

            }

        }

        return view('admin/blog', $data);

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
    public function deleteBlog($blogId)
    {

        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }

        $request = $this->blogModel->deleteBlog($blogId);

        if ($request) {
            $this->session->setFlashdata('deleted', 'Fail to Publish');
            return redirect()->to(base_url() . '/blog');

        }

    }

}