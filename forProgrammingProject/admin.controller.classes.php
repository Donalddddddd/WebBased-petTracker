<?php

class adminLoginContr extends adminLogin{

    private $uid;
    private $pwd;

    public function __construct($uid, $pwd){

        $this->uid = $uid;
        $this->pwd = $pwd;

    }

    public function loginUser(){
        if($this->emptyInput() == false){
            // echo "Empty Input!";
            header("location: adminLogin.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->uid, $this->pwd);
    }

    private function emptyInput(){
      $result;

        if(empty($this->uid || $this->pwd)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

}
