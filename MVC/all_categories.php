<?php
    include 'Controllers/categorycontroller.php';
    $categories = getAllCategories();
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> all_Categories:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><b><i>Sl#: <i><b></td>
						
					</tr>
                    <tr>
					    <td><b><i>Name: <i><b></td>
						
						
					</tr>
                    <tr>
					    <td><b><i>count: <i><b></td>
						
						
					</tr>
                    <tr>
                        <?php
                            $i=1;
					        foreach($categories as $c){
                                echo "<tr>";
                                    echo"<td>$i</td>";
                                    echo"<td>".$c["name"]."</td>";
                                    echo'<td ><a href="edit_category.php?id='.$c["id"].'"class="btn-btn-success">Edit</a></td>';
                                    echo'<td ><input type="submit" name="delete" value="Delete"></td>';
                                echo "<tr>";
                                $i++;
                            }
						?>
						
					</tr>
				</table>
			</form>
		</fieldset>
		
	</body>
</html>