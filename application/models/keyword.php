<?php defined('SYSPATH') or die('No direct script access.'); 

class Keyword_Model extends ORM
{
    protected $has_and_belongs_to_many = array('documents');
}

?>