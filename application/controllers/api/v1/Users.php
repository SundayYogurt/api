<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    // http://localhost/restapi/index.php/api/v1/users/users_get
    // http://localhost/index.php/api/v1/users/users_get
    public function users_get()
    {
        $data['query'] = $this->um->getAll();
        echo json_encode($data);
    }
}
