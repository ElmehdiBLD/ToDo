	<!DOCTYPE html >
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
    </head>
    <body>
        <div class="container">
            <h1>Liste des Taches fait par L'excellent Elmehdi</h1>
<form id="form1" name="form1" method="post" action="code.php">
  <table width="420" border="0">
  </table>
  <p> </p>
</form>
<table width="630" align="left" bgcolor="#CCCCCC">
    <a href="<?php echo base_url('ToDo/add'); ?>">ajouter</a><br>    
     <a href="<?php echo base_url('ToDo/update'); ?>">modifier</a><br> 
<tr >
 
<td width="152">Tache</td>
<td width="66">Ordre</td>
<td width="248">Completer?</td>
<td width="248">A faire</td>
</tr>

<tr bgcolor="#EEEEEE">
    
<td> <?php foreach ($todos as $todo):?>
                <?php echo $todo['task']; ?><a href="<?php echo base_url('ToDo/fait/'.$todo['id']); ?>"></a><br>
            <?php endforeach; ?>  </td>    
<td><?php foreach ($todos as $todo):?>
                <?php echo $todo['ordre']; ?><a href="<?php echo base_url('ToDo/fait/'.$todo['id']); ?>"></a><br>
            <?php endforeach; ?>  </td>  
<td><?php foreach ($todos as $todo):?>
                <?php echo $todo['completed']; ?><a href="<?php echo base_url('ToDo/fait/'.$todo['id']); ?>"></a><br>
            <?php endforeach; ?>  </td>  
<td><?php foreach ($todos as $todo):?>
    <a href="<?php echo base_url('ToDo/fait/'.$todo['id']); ?>">fait</a><br>
    <?php endforeach; ?>  </td>  
<td><?php foreach ($todos as $todo):?>
    <a href="<?php echo base_url('ToDo/pasfait/'.$todo['id']); ?>">pas&nbsp;fait</a><br>
    <?php endforeach; ?>  </td>  
</tr>

 


<tr bgcolor="#FFCCCC">
<td><? echo $row[0];  ?></td>
<td><? echo $row[1];  ?></td>
<td><? echo $row[2]  ?></td>
<td><? echo $row[3]  ?></td>
</tr><undefined></undefined>

</table>
           
</body>
 
</html>

        </div><!--/.container-->
        
        
        
       
        
    </body>
     <?php echo "si il y a un 1 dans completer l'action est faite ,sinon l'action n'est pas faite"?>
</html>
        
        
  <!--<input type="button" name"submit" value="ajouter" style="margin-left:500px;" />
                       <input type="button" name="submit" value="Modifier" style="margin-left:500px;" />--*>
