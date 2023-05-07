<?php

namespace controller;

require_once('app/lib/Autoloader.php');

use lib\Controller;
use model\SalesModel;

class SalesController extends Controller
{
    private $dataModel;

    public function __construct() {
        $this->dataModel = $this->model(SalesModel::class);
    }

    function index(): void {
        $data = [
            'pageTitle' => "Data Barang",
            'sales' => $this->dataModel->getSales()
        ];
        $this->view('v_sales', $data);
    }
}