<?php
include("adb.php");

class people extends adb{
    /**
    *a function to get a product identified by id
    */
    function get_people(){
        $str_query="select * from jquerypractice";
        if(!$this->query($str_query)){
            return false;
        }
        return $this->fetch();

    }
    /**
     * [[Description]]
     * @param [[Type]] $firstname [[Description]]
     * @param [[Type]] $lastname  [[Description]]
     */
    function add($firstname, $lastname){
        // you need a code to add product here
        $str_query="insert into jquerypractice set firstname='$firstname',lastname='$lastname'";
        return $this->query($str_query);
    }




}
?>
