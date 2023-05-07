<?php

namespace lib;

class Controller
{
    private $BASE_PATH = 'dim_tk4';

    private function getBaseUrl(): string {
        if(isset($_SERVER['HTTPS'])){
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        }
        else{
            $protocol = 'http';
        }

        return $protocol . "://" . $_SERVER['HTTP_HOST'] . '/' . $this->BASE_PATH . '/';
    }

    /**
     * Load model from given model class
     *
     * @param $model
     * @return mixed
     */
    public function model($model) {
        return new $model();
    }

    /**
     * Load view from given view class
     *
     * @param $view
     * @return void
     */
    public function view($view, $data = []) {
        $location = __DIR__ . '/../view/' . $view . '.php';
        $BASE_URL = $this->getBaseUrl();

        if(file_exists($location)) {
            require_once($location);
        } else {
            die("View not found.");
        }
    }
}