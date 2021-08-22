<?php namespace App\Libraries;

class CommonTasks
{
    public function processFile($file)
    {
        if ($file->isValid() && !$file->hasMoved()) {
            $randomName = $file->getRandomName();
            $dir = '/uploads/thumbnails/';

            if ($file->move(FCPATH . $dir, $randomName)) {

                return base_url() . $dir . $randomName;
            }
        } else {
            $this->session->setFlashdata('error', $file->getErrorString() . '' . $file->getError());

        }
    }

}