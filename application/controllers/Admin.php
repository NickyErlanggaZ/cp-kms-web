<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends AppController
{
    public function index()
    {
        $this->template = 'admin';
        $this->data['title'] = 'Dashboard';
        $this->render('backend/dashboard');
    }
    public function artikel()
    {
        $this->template = 'admin';
        $this->data['title'] = 'Artikel';
        $this->render('backend/artikel/index');
    }
    public function event()
    {
        $this->template = 'admin';
        $this->data['title'] = 'Event';
        $this->render('backend/event/index');
    }
    public function galeri()
    {
        $this->template = 'admin';
        $this->data['title'] = 'Galeri Foto';
        $this->render('backend/galeri/index');
    }
    public function home()
    {
        $this->template = 'admin';
        $this->data['title'] = 'Home';
        $this->render('backend/home/index');
    }
    public function klien()
    {
        $this->template = 'admin';
        $this->data['title'] = 'Klien';
        $this->render('backend/klien/index');
    }
    public function produk()
    {
        $this->template = 'admin';
        $this->data['title'] = 'Produk';
        $this->render('backend/produk/index');
    }
    public function users()
    {
        $this->template = 'admin';
        $this->data['title'] = 'Users';
        $this->render('backend/users/index');
    }
}