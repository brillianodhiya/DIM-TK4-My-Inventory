<?php

namespace controller;

require_once('app/lib/Autoloader.php');

use lib\Controller;

class HomeController extends Controller
{
    function index(): void {
        $data = [
            'pageTitle' => "Beranda"
        ];
        $this->view('index', $data);
    }
}