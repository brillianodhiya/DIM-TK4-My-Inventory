<?php

namespace controller;

require_once('app/lib/Autoloader.php');

use lib\Controller;
use model\SuppliersModel;

class SuppliersController extends Controller
{
    private $dataModel;

    public function __construct() {
        $this->dataModel = $this->model(SuppliersModel::class);
    }

    function index(): void {
        $data = [
            'pageTitle' => "Data Barang",
            'suppliers' => $this->dataModel->getSuppliers()
        ];
        $this->view('v_supplier', $data);
    }
}