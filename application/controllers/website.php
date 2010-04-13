<?php defined('SYSPATH') or die('No direct script access.'); 
class Website_Controller extends Template_Controller {
    public function __construct() {
        parent::__construct();
        $this->template->links = array 
        (
            'Home' => 'home', 
            'Browse' => 'folders',
            'Search' => 'search', 
            'About' => 'about', 
            'Contact' => 'contact',
        );
        $this->db = Database::instance(); // makes database object available to all controllers
    
        $this->session = Session::instance();
        $authentic = new Auth;
        if ($authentic->logged_in() || $authentic->auto_login()) {
            $this->user = $authentic->get_user();
        } else {
            $this->session->set("requested_url","/".url::current()); // this will redirect from the login page back to this page
            url::redirect('/auth/login');            
        }
        // if ($authentic->auto_login()) {
        //     $this->user = $authentic->get_user();
        //     url::redirect('/document/view/1');
        // }
        // if (!$authentic->logged_in()) {
        //     
        //     $this->session->set("requested_url","/".url::current()); // this will redirect from the login page back to this page
        //     url::redirect('/auth/login');
        // } else {
        //     $this->user = $authentic->get_user(); //now you have access to user information stored in the database
        // }
    }
}
?>