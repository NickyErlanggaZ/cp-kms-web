<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Artikel extends AppController
{
    public function index()
    {
        $this->data["isheroshow"] = false;
        $this->render('frontend/artikel');
    }
}
