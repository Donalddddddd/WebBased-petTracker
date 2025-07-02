<?php

class signupContr extends signup{

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email){

        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;

    }
    public function signupUser(){
        if($this->emptyInput() == false){
            // echo "Empty Input!";
            header("location: signup.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false){
            // echo "Invalid Username!";
            header("location: signup.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false){
            // echo "Invalid Email!";
            header("location: signup.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false){
            // echo "Password Don't match!";
            header("location: signup.php?error=passwordmatch");
            exit();
        }
        if($this->uidTakenCheck() == false){
            // echo "Password Don't match!";
            header("location: signup.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput(){
      $result;

        if(empty($this->uid || $this->pwd || $this->pwdRepeat || $this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidUid(){
      $result;


        if(!preg_match("/^[a-zA-z0-9]*$/", $this->uid)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
      $result;


        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function pwdMatch(){
      $result;

        if($this->pwd !== $this->pwdRepeat){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }



    private function uidTakenCheck(){
      $result;

        if(!$this->checkUser($this->uid, $this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

}
