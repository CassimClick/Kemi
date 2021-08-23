<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    public $db;
    public $dataTable;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->dataTable = $this->db->table('articles');
    }

    public function saveData($data)
    {

        return $this->dataTable->insert($data);

    }

    public function getAllArticles()
    {
        return $this->dataTable->orderBy('id', 'DESC')->get()->getResult();
    }
    public function singleArticle($id)
    {
        return $this->dataTable
            ->select()
            ->where(['Article_id' => $id])
            ->get()
            ->getRow();
    }

    public function updateArticle($id, $data)
    {

        return $this->dataTable
            ->set($data)
            ->where(['id' => $id])
            ->update();

    }
    public function deleteArticle($id)
    {

        return $this->dataTable
            ->where(['Article_id' => $id])
            ->delete();

    }
}