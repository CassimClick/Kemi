<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class BLogModel extends Model
{
    public $db;
    public $dataTable;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->dataTable = $this->db->table('blogs');
    }

    public function saveData($data)
    {

        return $this->dataTable->insert($data);

    }

    public function getAllBlogs()
    {
        return $this->dataTable->orderBy('id', 'DESC')->get()->getResult();
    }
    public function singleBlog($id)
    {
        return $this->dataTable
            ->select()
            ->where(['id' => $id])
            ->get()
            ->getRow();
    }

    public function updateBlog($id, $data)
    {

        return $this->dataTable
            ->set($data)
            ->where(['id' => $id])
            ->update();

    }
    public function deleteBlog($id)
    {

        return $this->dataTable
            ->where(['id' => $id])
            ->delete();

    }
}