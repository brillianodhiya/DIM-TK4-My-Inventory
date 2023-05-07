<?php

namespace controller;

require_once('app/lib/Autoloader.php');

use lib\Controller;
use model\PurchasingModel;

class PurchasingController extends Controller
{
    private $dataModel;

    public function __construct() {
        $this->dataModel = $this->model(PurchasingModel::class);
    }

    function index(): void {
        $data = [
            'pageTitle' => "Data Barang",
            'purchasing' => $this->dataModel->getData()
        ];
        $this->view('v_purchasing', $data);
    }
}