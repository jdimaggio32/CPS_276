
<?php

$arr = array(1,2,3,4,5);
$arr2 = array(1,2,3,4,5);
$output = "";
$output2 = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
	<div id="wrapper">
		<header>
		</header>
		<main>
			
        <ul>


        <?php
    foreach($arr as $i){?>

    <li><?php
    $output = $i;
    echo $output."<br />";
    ?>
</li>
<ul>
        <?php
        foreach($arr2 as $z){?>
           <li><?php
    $output2 = $z;
    echo $output2."<br />";
    ?>
    </li>
    
    <?php
    }
    ?>
</ul>
    <?php
    }
    ?>


			
		</main>
		<footer>
		</footer>
	</div>
	
</body>
</html>