<?php
require_once('data2.php');

function getTeams($list){
    $teamList = [];
    foreach (range(0,count($list)-1) as $p) {
        $item =$list[$p];
        if ($item->isTeam){
            array_push($teamList,$item);

        }
    }
    return$teamList;
}


function exercise1($person, $people){
    $teams = [];
  $teamList = getTeams($people);
  foreach (range(0,count($teamList)-1) as $index){
      $personName = $person->displayName;
      $membersList = $teamList[$index]->members;
      foreach (range(0,count($membersList)-1) as $j){

          if ($membersList[$j]->displayName ==$personName){

              array_push($teams,$teamList[$index]);
          }
      }

  }
  return $teams;

}
$teams = [];
$result = exercise1($alice, $people);
foreach($result as $res) {
    array_push($teams, $res->displayName);
}

echo (json_encode($teams));

