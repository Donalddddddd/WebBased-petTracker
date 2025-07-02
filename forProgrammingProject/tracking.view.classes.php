<?php


class trackingView extends tracking {

  public function fetchSuggestion($userId){

      $trackingInfo = $this->getTrackingInfo($userId);
      echo $trackingInfo[0]["profiles_fullname"];

  }

}
