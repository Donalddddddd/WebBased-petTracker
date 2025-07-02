<?php


class profileInfoContr extends profileInfo {

    private $userId;
    private $userUid;

    public function __construct($userId, $userUid){

      $this->userId = $userId;
      $this->userUid = $userUid;
    }

    public function defaultProfileInfo(){
      $profileFullname = $this->userUid;
      $profileGender = "Edit your info";
      $profileAddress = "Edit your info";
      $profilePhone = "0987654321";
      $profilePetname = "Pet name";
      $profilePetType = "Pet type";
      $profilePetBreed = "Pet breed";
      $profileEmail = "Edit your info";
      $profileDateOfBirth = "January 1";
      $this->setProfileInfo($profileFullname, $profileGender, $profileAddress, $profilePhone,  $profilePetType, $profilePetBreed, $profilePetname, $profileEmail,  $profileDateOfBirth, $this->userId);

    }

    public function updateProfileInfo($fullname, $gender, $address, $phone,  $petType, $petBreed,$petName, $email, $dateOfBirth){
          //error handlers
      if($this->emptyInputCheck($fullname, $gender, $address, $phone, $petType, $petBreed,  $petName, $email,  $dateOfBirth) == false){
        header("location: profileSetting.php?error=emptyinput");
        exit();
      }

      //update profile Info
      $this->setNewProfileInfo($fullname, $gender, $address, $phone,   $petType, $petBreed, $petName, $email, $dateOfBirth, $this->userId);
    }

    private function emptyInputCheck($fullname, $gender,$address, $phone,  $petType, $petBreed, $petName, $email,  $dateOfBirth){
      $result;

      if(empty($this->fullname || $this->gender || $this->address || $this->phone ||  $this->petType || $this->petBreed || $this->petName || $this->email ||  $this->dateOfBirth)){
        $result = true;
      }
      else{
        $result = false;
      }
      return $result;
    }

}
