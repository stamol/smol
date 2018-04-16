<?php
class Page_model extends MY_Model
{
    protected $table_name   = 'pages';
    protected $key          = 'id';
    protected $soft_deletes = FALSE;
    protected $date_format  = 'datetime';
    protected $log_user     = FALSE;

    protected $set_created  = TRUE;
    protected $created_field    = 'created_on';
    protected $created_by_field = 'created_by';

    protected $set_modified     = FALSE;
    protected $modified_field   = 'modified_on';
    protected $modified_by_field = 'modified_by';

    protected $deleted_field    = 'deleted';
    protected $deleted_by_field = 'deleted_by';

    // Observers
    protected $before_insert    = array();
    protected $after_insert     = array();
    protected $before_update    = array();
    protected $after_update     = array();
    protected $before_find      = array();
    protected $after_find       = array();
    protected $before_delete    = array();
    protected $after_delete     = array();

    protected $return_type      = 'array';
    protected $protected_attributes   = array();

    protected $validation_rules         = array();
    protected $insert_validation_rules  = array();
    protected $skip_validation          = false;

    function __construct ()
    {
        parent::__construct();
    }

}