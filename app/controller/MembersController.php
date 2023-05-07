<?php

namespace controller;

require_once('app/lib/Autoloader.php');

use lib\Controller;
use model\MembersModel;

class MembersController extends Controller
{
    private $dataModel;

    public function __construct() {
        $this->dataModel = $this->model(MembersModel::class);
    }

    function index(): void {
        $data = [
            'pageTitle' => "Data Barang",
            'members' => $this->dataModel->getMembers()
        ];
        $this->view('v_member', $data);
    }
}