<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Frontend_Controller {

    function __construct ()
    {
        parent::__construct();

        // Load stuff

    }
    public function index()
	{
		//echo ENVIRONMENT;
        $this->db->select('slug, body');
        $query = $this->db->get('pages');
        foreach ($query->result() as $row)
        {
            echo $row->slug . '<br/>';
            //echo $row->body;
        }
       //$this->data['menu'] = $this->page->get_field('pages','slug');
        // $str =
        //dump($this->data['menu']);
        /*$page = array(
'title' => 'solon-by-lyon',
            'slug' => 'sol',
            'order' => '5',
            'body' => 'fgfgf fgfgfgfg',
            'parent_id' => '0',
            'template' => 'page'

        );*/
       // $this->page->insert($page);
        $str = $this->db->last_query();
        echo $str;
	}
    public function pages()
    {
echo "lllll";
    }
}
