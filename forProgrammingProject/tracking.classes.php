<?php



class tracking extends dbh {

    protected function getTrackingInfo($userId){
      $stmt = $this->connect()->prepare('SELECT * FROM profiles WHERE users_id = ?;');

      if(!$stmt->execute(array($userId))){
          $stmt = null;
          header("location: tracking.php?error=stmtfailed");
          exit();
      }

      if($stmt->rowCount() == 0){
        $stmt = null;
        header("location: tracking.php?error=profilenotfound");
        exit();
      }

      $trackingInfo = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $trackingInfo;
    }

    protected function setNewTrackingInfo($suggestion, $userId){
      $stmt = $this->connect()->prepare('UPDATE tracking SET tracking_suggestion = ? WHERE users_id = ?;');

      if(!$stmt->execute(array($suggestion, $userId))){
          $stmt = null;
          header("location: tracking.php?error=stmtfailed");
          exit();
      }
      $stmt = null;
    }

    protected function setTrackingInfo($suggestion, $userId){
      $stmt = $this->connect()->prepare('INSERT INTO tracking (tracking_suggestion, users_id) VALUES (?,?);');

      if(!$stmt->execute(array($suggestion,$userId))){
          $stmt = null;
          header("location: tracking.php?error=stmtfailed");
          exit();
      }
      $stmt = null;
    }


}
