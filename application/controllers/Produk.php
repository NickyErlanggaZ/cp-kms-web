<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produk extends AppController
{
    public function index()
    {
        $this->data["isheroshow"] = false;
        $this->render('frontend/index');
    }
    public function detail()
    {
        $this->template = 'produkdetail';
        $this->data["isheroshow"] = false;
        $this->render('frontend/produk-detail');
    }
}
