<?php namespace App\Controllers;

use App\Libraries\CommonTasks;
use App\Models\ArticleModel;

class ArticleController extends BaseController
{
    public $articleModel;
    public $session;
    public $commonTask;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->commonTask = new CommonTasks();

        helper('date');
        $this->session = session();
        helper(['form', 'image']);
    }

//=================Publishing new Article====================
    public function index()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }

        $data = [];
        $data['page'] = [
            'title' => 'Articles',
            'heading' => 'Articles',
        ];

        $data['articles'] = $this->articleModel->getAllArticles();

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

                $articleId = md5(str_shuffle('qweriopasdfghjklzxcvbnm123456789'));
                $article = [
                    'Article_id' => $articleId,
                    'title' => $this->request->getPost('title'),
                    'category' => $this->request->getPost('category'),
                    'description' => $this->request->getPost('description'),
                    'image_url' => $this->commonTask->processFile($file),
                ];

                // print_r($article);
                // exit;

                $publish = $this->articleModel->saveData($article);
                if ($publish) {
                    $this->session->setFlashdata('published', 'Content Published');
                    return redirect()->to(current_url());

                } else {
                    $this->session->setFlashdata('error', 'Fail to Publish');
                    return redirect()->to(current_url());

                }

            } else {
                $data['validation'] = $this->validator;
                // return redirect()->to('Article');

            }

        }

        return view('admin/article', $data);

    }
    //=================All Articles====================
    public function allArticles()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        $data['page'] = [
            'title' => 'All Articles',
            'heading' => ' All Articles',
        ];
        //$data['xxx'] = [3,69,6696,56];

        $data['allArticles'] = $this->articleModel->getAllArticles();

        return view('Pages/allArticles', $data);
    }
//=================get a single Article Articles====================
    public function singleArticle($id)
    {
        $data['page'] = [
            'title' => 'Article',
            'heading' => 'Article',
        ];

        $data['theArticle'] = $this->articleModel->getSingleArticle($id);

        return view('pages/singleArticle', $data);
    }

    public function viewSingleArticle()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        if ($this->request->getMethod() == 'post') {
            $articleId = $this->request->getVar('id');
            $result = $this->articleModel->singleArticle($articleId);

            echo json_encode($result);

        }
    }
    public function deleteArticle($articleId)
    {

        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }

        $request = $this->articleModel->deleteArticle($articleId);

        if ($request) {
            $this->session->setFlashdata('deleted', 'Fail to Publish');
            return redirect()->to(base_url() . '/articles');

        }

    }

    public function downloadArticlePdf($articleId)
    {

        $title = $this->articleModel->singleArticle($articleId)->title . str_shuffle('1234567890');
        $dompdf = new \Dompdf\Dompdf();
        $options = new \Dompdf\Options();

        $data['document'] = $this->articleModel->singleArticle($articleId);

        $dompdf->loadHtml(view('pages/pdfExport', $data));
        $dompdf->setPaper('A4', 'portrait');
        $options->set('isRemoteEnabled', true);

        $dompdf->render();

        $dompdf->stream($title . ':' . '.pdf', array('Attachment' => 1));

    }

}