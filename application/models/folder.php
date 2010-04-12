<?php defined('SYSPATH') or die('No direct script access.'); 

class Folder_Model extends ORM_Tree
{
    protected $ORM_Tree_children = 'folders';
 
    // Set the column which holds this models parent
    // Default is parent_id
    protected $ORM_Tree_parent_key = 'parent_id';
    protected $has_and_belongs_to_many = array('documents');
}

?>