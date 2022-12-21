<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Galeri extends AppController
{
    public function index()
    {
        $this->data["isheroshow"] = false;
        $this->render('frontend/galeri');
    }
}
