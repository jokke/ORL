<?php defined('SYSPATH') or die('No direct script access.'); 

class Document_Model extends ORM
{
    protected $has_and_belongs_to_many = array('folders','authors','keywords');


}

?>