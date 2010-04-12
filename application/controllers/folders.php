<?php defined('SYSPATH') or die('No direct script access');

class Folders_Controller extends Website_Controller {

    public function index() {
        url::redirect('folders/browse/0');
    }
    public function browse($parent_id=0) {
        // foreach ($this->user->roles as $role) {
        //     echo Kohana::debug("kuken");
        // }
#        echo Kohana::debug($this->user->roles->as_array());
        $folder = ORM::factory("Folder", $parent_id);
        $this->template->title = "Browsing folder ".$folder->name;
        $this->template->content = new View('pages/browse');
        $this->template->content->folders = $folder->children;
        $this->template->content->documents = $folder->documents;

        // echo Kohana::debug(ORM::factory("Folder", $parent_id)->children->as_array());
        // echo Kohana::debug(ORM::factory("Folder", 3)->parent->name);
    }
}