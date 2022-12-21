<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AppController extends CI_Controller
{
    protected $template = 'front';
    protected $data = [];
    public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
	}

    public function render($content)
    {
        $template = $this->load->view('template/template.'.$this->template.'.php', $this->data, true);
        $loadContent = $this->load->view($content, $this->data, true);
        exit(str_replace('{CONTENT}', $loadContent, $template));
    }
}
