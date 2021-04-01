<?php

require_once('data3.php');

function recursive($team, $allPeople, $l){
    if(($team->isTeam) && ($l<3 )){
        foreach(range(0,count($team->members)-1) as $k){
            $item = $team->members[$k];
            recursive($item,$allPeople,($l+1));
        }

    }else{
        array_push($allPeople,$team);

    }
return $allPeople;
}


function get_members($team){
    $allPeople = [];
    $l =0;
    recursive($team,$allPeople,$l);
    array_pop($allPeople);
    return $allPeople;
}

$teams = [];
$result = get_members($c_team);
foreach($result as $res) {
    array_push($teams, $res->displayName);
}

sort($teams);

echo json_encode($teams);