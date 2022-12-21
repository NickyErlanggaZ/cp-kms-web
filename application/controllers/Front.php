<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Front extends AppController
{
    public function index()
    {
        $this->data["isheroshow"] = true;
        $this->render('frontend/index');
    }
}
