<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
 
class Dashboard extends BaseController{
    function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {
        $this->global['pageTitle'] = 'THIMS';
        $this->loadViews("dashboard", $this->global,NULL, NULL);
    }
}

