<?php 

class NamesList{

   public $nameList="";

   //this function will take in a name, sort it, and return it as a string
   public function AcceptNames($newName){

     return $this->nameList .= $newName;
      
   

   }

   //function to clear names from list
   public function ClearNames(){

      $names="";
      return $names;

   }



}

?>