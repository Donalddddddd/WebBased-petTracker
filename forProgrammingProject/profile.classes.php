<?php



class profileInfo extends dbh {

    protected function getProfileInfo($userId){
      $stmt = $this->connect()->prepare('SELECT * FROM profiles WHERE users_id = ?;');

      if(!$stmt->execute(array($userId))){
          $stmt = null;
          header("location: profile.php?error=stmtfailed");
          exit();
      }

      if($stmt->rowCount() == 0){
        $stmt = null;
        header("location: profile.php?error=profilenotfound");
        exit();
      }

      $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $profileData;
    }

    protected function setNewProfileInfo($profileFullname, $profileGender, $profileAddress, $profilePhone, $profilePetType, $profilePetBreed, $profilePetname, $profileEmail,  $profileDateOfBirth, $userId){
      $stmt = $this->connect()->prepare('UPDATE profiles SET profiles_fullname = ?, profiles_gender = ?, profiles_address = ?, profiles_phone = ?, profiles_pettype = ?, profiles_petbreed = ?, profiles_petname = ?, profiles_email = ?,  profiles_dateofbirth = ? WHERE users_id = ?;');

      if(!$stmt->execute(array($profileFullname, $profileGender,$profileAddress, $profilePhone, $profilePetType, $profilePetBreed, $profilePetname, $profileEmail, $profileDateOfBirth, $userId))){
          $stmt = null;
          header("location: profile.php?error=stmtfailed");
          exit();
      }
      $stmt = null;
    }

    protected function setProfileInfo($profileFullname, $profileGender, $profileAddress, $profilePhone,  $profilePetType, $profilePetBreed, $profilePetname, $profileEmail,  $profileDateOfBirth, $userId){
      $stmt = $this->connect()->prepare('INSERT INTO profiles (profiles_fullname, profiles_gender, profiles_address, profiles_phone,  profiles_pettype, profiles_petbreed,profiles_petname, profiles_email, profiles_dateofbirth, users_id) VALUES (?,?,?,?,?,?,?,?,?,?);');

      if(!$stmt->execute(array($profileFullname, $profileGender, $profileAddress, $profilePhone,  $profilePetType, $profilePetBreed, $profilePetname, $profileEmail,  $profileDateOfBirth, $userId))){
          $stmt = null;
          header("location: profile.php?error=stmtfailed");
          exit();
      }
      $stmt = null;
    }


}
