<?php 
 
class NamesList{

   public $listOfNames="";

   //this function will take in a name, sort it, and return it as a string
   public function AcceptNames($newName){

      global $listOfNames;
      $names = $listOfNames . $newName;
      $listOfNames = $names;

      return $listOfNames;
   

   }

   //function to clear names from list
   public function ClearNames(){

      $names="";
      return $names;

   }



}

?>