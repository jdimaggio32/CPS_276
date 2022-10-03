
<?php
$rows = 15 ;
$cells = 5;
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
           
        <table>
        <?php
			
        for ($i=1; $i<=$rows; $i++) { ?>
             
             <table border="1">
                <tr>

                <?php
                for ($z=1; $z<=$cells; $z++) { ?>
                
                    <td>row <?php echo $i?> cell <?php echo $z?></td>
                    <?php
                }  
                ?>

                </tr>

                </table>
                <?php
                }
                ?>
			
		</main>
        
		<footer>
		</footer>
	</div>
	
</body>
</html>