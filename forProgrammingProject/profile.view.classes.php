<?php


class profileInfoView extends profileInfo {

  public function fetchFullname($userId){

      $profileInfo = $this->getProfileInfo($userId);
      echo $profileInfo[0]["profiles_fullname"];

  }

  public function fetchGender($userId){

      $profileInfo = $this->getProfileInfo($userId);
      echo $profileInfo[0]["profiles_gender"];

  }

  public function fetchAddress($userId){

      $profileInfo = $this->getProfileInfo($userId);
      echo $profileInfo[0]["profiles_address"];

  }

  public function fetchPhone($userId){

      $profileInfo = $this->getProfileInfo($userId);
      echo $profileInfo[0]["profiles_phone"];

  }
  public function fetchPetName($userId){

      $profileInfo = $this->getProfileInfo($userId);
      echo $profileInfo[0]["profiles_petname"];

  }

  public function fetchPetType($userId){

      $profileInfo = $this->getProfileInfo($userId);
      echo $profileInfo[0]["profiles_pettype"];

  }

  public function fetchPetBreed($userId){

      $profileInfo = $this->getProfileInfo($userId);
      echo $profileInfo[0]["profiles_petbreed"];

  }

  public function fetchEmail($userId){

      $profileInfo = $this->getProfileInfo($userId);
      echo $profileInfo[0]["profiles_email"];

  }

  public function fetchDateOfBirth($userId){

      $profileInfo = $this->getProfileInfo($userId);
      echo $profileInfo[0]["profiles_dateofbirth"];

  }

}
