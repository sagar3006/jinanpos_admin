<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct() {
    parent::__construct();
    // cache control
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
  }

  // default function, redirects to login page if no admin logged in yet
  public function index() {
    if ($this->session->userdata('admin_login') != 1)
      redirect(base_url() . 'index.php?login', 'refresh');
    if ($this->session->userdata('admin_login') == 1)
      redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
  }

  // ADMIN DASHBOARD
  function dashboard() {
    if ($this->session->userdata('admin_login') != 1)
      redirect(base_url(), 'refresh');

    $page_data['page_name']   = 'dashboard';
    $page_data['page_title']  = 'Dashboard';
    $this->load->view('backend/index', $page_data);
  }

  // SHOP
  function shop($param1 = '', $param2 = '')
  {
    if ($this->session->userdata('admin_login') != 1)
      redirect(base_url(), 'refresh');

    if ($param1 == "create")
    {
      $this->crud_model->create_shop();
      $this->session->set_flashdata('flash_message', 'Data Added Successfully');
      redirect(base_url() . 'index.php?admin/shop', 'refresh');
    }

    if ($param1 == "update")
    {
      $this->crud_model->update_shop($param2);
      $this->session->set_flashdata('flash_message', 'Data Updated Successfully');
      redirect(base_url() . 'index.php?admin/shop', 'refresh');
    }

    if ($param1 == "delete")
    {
      $this->crud_model->delete_shop($param2);
      $this->session->set_flashdata('flash_message', 'Data Deleted Successfully');
      redirect(base_url() . 'index.php?admin/shop', 'refresh');
    }

    if ($param1 == "deactivate")
    {
      $this->crud_model->deactivate_shop($param2);
      $this->session->set_flashdata('flash_message', 'Shop Deactivated Successfully');
      redirect(base_url() . 'index.php?admin/shop', 'refresh');
    }

    if ($param1 == "renew")
    {
      $this->crud_model->renew_shop($param2);
      $this->session->set_flashdata('flash_message', 'Subscription Renewed Successfully');
      redirect(base_url() . 'index.php?admin/shop', 'refresh');
    }

    $data['page_name']  = 'shop';
    $data['page_title'] = 'Shops';
    $this->load->view('backend/index', $data);
  }

  // SHOP ADD PAGE
  function shop_add()
  {
    if ($this->session->userdata('admin_login') != 1)
      redirect(base_url(), 'refresh');

    $data['page_name']  = 'shop_add';
    $data['page_title'] = 'Add Shop';
    $this->load->view('backend/index', $data);
  }

  // SHOP EDIT PAGE
  function shop_edit($param1 = '')
  {
    if ($this->session->userdata('admin_login') != 1)
      redirect(base_url(), 'refresh');

    $data['shop_id']    = $param1;
    $data['page_name']  = 'shop_edit';
    $data['page_title'] = 'Edit Shop';
    $this->load->view('backend/index', $data);
  }

  // SHOP EWNEW PAGE
  function shop_renew($param1 = '')
  {
    if ($this->session->userdata('admin_login') != 1)
      redirect(base_url(), 'refresh');

    $data['shop_id']    = $param1;
    $data['page_name']  = 'shop_renew';
    $data['page_title'] = 'Renew Subscription';
    $this->load->view('backend/index', $data);
  }
}