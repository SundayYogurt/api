<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users_model extends CI_Model
{
    public function getAll()
    {
        $result = $this->db
            ->select('user_id, user_name')
            ->from('tbl_user')
            ->get()
            ->result();
        return $result;
    }
}
