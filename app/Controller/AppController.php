<?php
Class AppController Extends Controller {
   public $components = array('Auth', 'Session', 'RequestHandler'); 
    
    public function beforeFilter() {
        $this->Auth->allow('add');
        parent::beforeFilter();
    }

    public function beforeRender()  {
        $this->set("userlogin",$this->Auth->user());
    }
}
?>
