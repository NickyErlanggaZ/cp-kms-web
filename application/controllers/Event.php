<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Event extends AppController
{
    public function index()
    {
        $this->data["isheroshow"] = false;
        $this->render('frontend/event');
    }
}
