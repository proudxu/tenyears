<?php
class IndexController extends Yaf_Controller_Abstract {
   public function indexAction() {//默认Action
   	   //Yaf_Session::getInstance()->set("a","php");
       $this->getView()->assign("content", "Hello World");
       echo Yaf_Session::getInstance()->get("a");
   }
}
?>
