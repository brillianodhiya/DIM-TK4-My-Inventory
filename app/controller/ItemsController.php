<?php

namespace controller;

require_once('app/lib/Autoloader.php');

use lib\Controller;
use model\ItemsModel;

class ItemsController extends Controller
{
    private $dataModel;

    public function __construct() {
        $this->dataModel = $this->model(ItemsModel::class);
    }
    function index(): void {
        $data = [
            'pageTitle' => "Data Barang",
            'items' => $this->dataModel->getItems()
        ];
        $this->view('v_barang', $data);
    }
}