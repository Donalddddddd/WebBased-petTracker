<?php


class trackingContr extends tracking {


    private $suggestion;

    public function __construct($suggestion){


      $this->suggetion = $suggestion;
    }

    public function defaultTrackingInfo(){
      $suggestion = "generate tracking";
      $this->setProfileInfo($suggestion);

    }

    public function updateTracking($suggestion){
          //error handlers
      if($this->emptyInputCheck($suggestion) == true){
        header("location: tracking.php?error=emptyinput");
        exit();
      }

      //update profile Info
      $this->setNewTrackingInfo($suggestion);
    }

    private function emptyInputCheck($suggestion){
      $result;

      if(empty($suggestion)){
        $result = true;
      }
      else{
        $result = false;
      }
      return $result;
    }

}
