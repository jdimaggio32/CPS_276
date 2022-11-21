<?php
require_once 'PdoMethods.php';
require_once 'displayNotes.php';
class Crud {

    public function getNotes($b,$e){
        $pdo = new PdoMethods();

      
        $sql = "SELECT theTime, note FROM aData WHERE theTime BETWEEN '$b' AND '$e' ORDER BY theTime DESC";
        
        $records = $pdo->selectNotBinded($sql);

        /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
        if($records == 'error'){
            return 'There has been and error processing your request';
        }
        else {
            if(count($records) != 0){
                return $this->makeTable($records);	
            }
            else {
                return 'No notes found for the date range selected';
            }
        }
    }

    private function makeTable($records){
        $output = "<table class='table table-bordered table-striped'><thead><tr>";
		$output .= "<th>Date and Time</th><th>Note</th></tr><tbody>";
		foreach ($records as $row){

            $fromSql = strtotime($row['theTime']);
            $formatted = date("n/j/Y g:i A", $fromSql);

            $output .= "<tr><td>{$formatted}</td>";
            $output .= "<td>{$row['note']}</td>";

		}
		
		$output .= "</tbody></table></form>";
		return $output;
    }
}

?>




