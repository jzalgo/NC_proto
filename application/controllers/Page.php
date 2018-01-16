<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

public function get_thumb($primary_key)
{
    $this->load->database();
    $this->load->model('M_syslog', 'ms');
    $data = $this->ms->get($primary_key);
    if(!$data){
        return FALSE;
    }
    $img = $data->sys_path;
    if ($img != NULL) {
        //unlink('assets/uploads/files/'.$img);
        return TRUE;
    }
    return TRUE;
}

}
