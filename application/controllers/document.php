<?php defined('SYSPATH') or die('No direct script access');

class Document_Controller extends Website_Controller {

    public function view($document_id) {
        
        $document = ORM::factory("Document", $document_id);
        $this->template->title = "Viewing ".$document->title;
        $this->template->content = new View('pages/doc_view');
        $this->template->content->document = $document;

    }
}
?>