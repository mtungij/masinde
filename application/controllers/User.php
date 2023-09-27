<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }
    public function index()
    {
        $users = $this->UserModel->get_users();
        $this->load->view('users/all_users', ['users' => $users]);
    }

    public function show($id)
    {
        $this->load->view('user_detail');
    }

    public function create_index()
    {
        $this->load->view('users/add_user');
    }

    public function update()
    {
        //update user here
    }

    public function delete()
    {
        //delete user
    }

    public function profile($id)
    {
        $user = $this->UserModel->get_user($id);
        $this->load->view('users/edit', ['user' => $user]);
    }
}