<?php
require_once('data3.php');

function get_members($team){
    $allPeople = [];
    foreach (range(0,count($team->members)-1) as $i){
        $item = $team->members[$i];
        if($item->isTeam){
            foreach(range(0,count($item->members)-1) as $j){
                $item2 = $item->members[$j];
                array_push($allPeople,$item2);
            }
        }else{
            array_push($allPeople,$item);
        }
    }
    return $allPeople;
}

$teams = [];
$result = get_members($c_team);
foreach($result as $res) {
    array_push($teams, $res->displayName);
}

sort($teams);

echo json_encode($teams);
