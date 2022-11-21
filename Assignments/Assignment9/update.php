<?php

require_once 'addNote.php';
require_once 'pdo_conn.php';

class Date_time {

    function checkSubmit() {

        if(isset($_POST['sub'])) {
        
            if (($_POST["dateTime"]=="") || ($_POST["note"])=="") {
                echo "You must enter a date, time, and note";
            } else {
                $notes = ($_POST["note"]);
                $usrTime = ($_POST["dateTime"]);

                //convert usr time into a time stamp
                $time = strtotime("$usrTime");
                $timeStamp = date('Y-m-d  H:i:s', $time);

                //need to update the database with the timeStamp and the usrNote
                    
                    $sql = "INSERT INTO aData(theTime, note)
                            VALUES ('$timeStamp', '$notes')";


                    $connection = new PdoMethods();
                    $conn = $connection->dbOpen();
                    $result = $conn->query($sql);

    
                echo "Note has been added";

            }

        }  
        
        






    }
    
}

?>