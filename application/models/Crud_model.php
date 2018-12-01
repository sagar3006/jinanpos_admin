<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    // SHOP
    function create_shop()
    {
        $data['shop_name']       			= $this->input->post('shop_name');
        $data['domain']       				= $this->input->post('domain');
        $data['master_username']       		= $this->input->post('master_username');
        $data['master_password']       		= $this->input->post('master_password');
        $data['db_hostname']       			= $this->input->post('db_hostname');
        $data['db_username']       			= $this->input->post('db_username');
        $data['db_password']       			= $this->input->post('db_password');
        $data['db_name']       				= $this->input->post('db_name');
        $data['subscription_start_date']	= strtotime($this->input->post('subscription_start_date'));
        $data['subscription_end_date']		= strtotime($this->input->post('subscription_end_date'));
        $data['shop_status']       			= 1;

        $this->db->insert('shop', $data);
    }

    function update_shop($shop_id = '')
    {
        $data['shop_name']       			= $this->input->post('shop_name');
        $data['domain']       				= $this->input->post('domain');
        $data['master_username']       		= $this->input->post('master_username');
        $data['master_password']       		= $this->input->post('master_password');
        $data['db_hostname']       			= $this->input->post('db_hostname');
        $data['db_username']       			= $this->input->post('db_username');
        $data['db_password']       			= $this->input->post('db_password');
        $data['db_name']       				= $this->input->post('db_name');
        $data['subscription_start_date']	= strtotime($this->input->post('subscription_start_date'));
        $data['subscription_end_date']		= strtotime($this->input->post('subscription_end_date'));

        $this->db->update('shop', $data, array('shop_id' => $shop_id));
    }

    function delete_shop($shop_id = '')
    {
        $this->db->where('shop_id', $shop_id);
        $this->db->delete('shop');
    }

    function deactivate_shop($shop_id = '')
    {
        $shop_info = $this->db->get_where('shop', array('shop_id' => $shop_id))->row();

        $remote_db_config = array(
            'dsn'           => '',
            'hostname'      => $shop_info->db_hostname,
            'username'      => $shop_info->db_username,
            'password'      => $shop_info->db_password,
            'database'      => $shop_info->db_name,
            'dbdriver'      => 'mysqli',
            'dbprefix'      => 'sma_',
            'pconnect'      => FALSE,
            'db_debug'      => FALSE,
            'cache_on'      => FALSE,
            'cachedir'      => '',
            'char_set'      => 'utf8',
            'dbcollat'      => 'utf8_general_ci',
            'swap_pre'      => '',
            'encrypt'       => FALSE,
            'compress'      => FALSE,
            'stricton'      => FALSE,
            'failover'      => array(),
            'save_queries'  => FALSE
        );
        $this->remote_DB = $this->load->database($remote_db_config, TRUE);

        $data['shop_status'] = 0;

        $this->remote_DB->update('subscription', $data, array('subscription_id' => 1));

        $shop_status = $this->remote_DB->get_where('subscription', array('subscription_id' => 1))->row()->shop_status;

        $data2['shop_status'] = $shop_status;

        $this->db->update('shop', $data2, array('shop_id' => $shop_id));
    }

    function renew_shop($shop_id = '')
    {
        $data['subscription_start_date']    = strtotime($this->input->post('subscription_start_date'));
        $data['subscription_end_date']      = strtotime($this->input->post('subscription_end_date'));

        $this->db->update('shop', $data, array('shop_id' => $shop_id));

        $shop_info = $this->db->get_where('shop', array('shop_id' => $shop_id))->row();

        $remote_db_config = array(
            'dsn'           => '',
            'hostname'      => $shop_info->db_hostname,
            'username'      => $shop_info->db_username,
            'password'      => $shop_info->db_password,
            'database'      => $shop_info->db_name,
            'dbdriver'      => 'mysqli',
            'dbprefix'      => 'sma_',
            'pconnect'      => FALSE,
            'db_debug'      => FALSE,
            'cache_on'      => FALSE,
            'cachedir'      => '',
            'char_set'      => 'utf8',
            'dbcollat'      => 'utf8_general_ci',
            'swap_pre'      => '',
            'encrypt'       => FALSE,
            'compress'      => FALSE,
            'stricton'      => FALSE,
            'failover'      => array(),
            'save_queries'  => FALSE
        );
        $this->remote_DB = $this->load->database($remote_db_config, TRUE);

        $data2['shop_status'] = 1;

        $this->remote_DB->update('subscription', $data2, array('subscription_id' => 1));

        $shop_status = $this->remote_DB->get_where('subscription', array('subscription_id' => 1))->row()->shop_status;

        $data3['shop_status'] = $shop_status;

        $this->db->update('shop', $data3, array('shop_id' => $shop_id));
    }
}