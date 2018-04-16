<?php
class Frontend_Controller extends MY_Controller
{
    protected $layout = FALSE;
    protected $view = 'welcome_message';
    //model do załadowania - 'page_model'
    protected $models = array('page');
	function __construct ()
	{
		parent::__construct();
		//var_dump('Witaj w frontend');
		// Load stuff
		//$this->load->model('page_m');
		//$this->load->model('page_model');
        //$this->_load_models();

		// Fetch navigation
		//$this->data['menu'] = $this->page_m->get_nested();
		//$this->data['news_archive_link'] = $this->page_m->get_archive_link();
		//$this->data['meta_title'] = config_item('site_name');

	}
}