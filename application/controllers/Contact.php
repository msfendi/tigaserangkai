<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        $data = [
            "title" => "contact"
        ];
        $this->load->view("contact", $data);
    }
}
