<?php

class Directories{

    public function create($dName="", $fileContent="") {


        if (file_exists("/home/j/d/jdimaggio/public_html/CPS_276/Assignments/Assignment5/Directories/$dName")) {
            echo "A directory already exists with that name.";
        } else {
            //create directory with name $dName
            mkdir ("/home/j/d/jdimaggio/public_html/CPS_276/Assignments/Assignment5/Directories/$dName", 0777);
            chmod( "/home/j/d/jdimaggio/public_html/CPS_276/Assignments/Assignment5/Directories/$dName", 0777 );
             
            //create file with name "readme.txt" -> this goes into the directory that was just created
            //inside the file will be the $fileContent

            touch("/home/j/d/jdimaggio/public_html/CPS_276/Assignments/Assignment5/Directories/$dName/readme.txt");
            chmod( "/home/j/d/jdimaggio/public_html/CPS_276/Assignments/Assignment5/Directories/$dName/readme.txt", 0777 );
            $handle = fopen("/home/j/d/jdimaggio/public_html/CPS_276/Assignments/Assignment5/Directories/$dName/readme.txt", "a" );
            fwrite($handle, $fileContent);

            echo "File and Directory were created.";

            ?>
                <br><br>
            <?php

            echo "<a href=https://russet-v8.wccnet.edu/~jdimaggio/CPS_276/Assignments/Assignment5/Directories/$dName/readme.txt>Path where file is located</a>";


        }
       
        
        
        
      
          
        

      

    }


}

?>