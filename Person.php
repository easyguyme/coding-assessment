<?php

class Person {

    function __construct($id, $displayName, $members=null) {
        $this->id = $id;
        $this->displayName = $displayName;
        $this->members = $members;
        $this->isTeam = !is_null($members);
    }


}

?>