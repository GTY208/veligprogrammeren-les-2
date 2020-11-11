

<html>
   <head>
      <title>my website</title>
   </head>
  <body>
      <div>
          <form method='POST' action="index.php" >
              <input type="text" name="userinput" placeholder="search"/>
              <input type="submit" name="submit" value="submit"\>
           </form>
       </div>


  </body>
</html>

<?php


if (isset($_POST['submit'])){
  if (!empty ($_POST['userinput'])) {
     echo "your search is  " . $_POST['userinput'] . "<br>" ;


} else {
echo "please search something";
}

} 



?>

<?

//opdr 1 wat ik hebt geschreven in de input balk

// opdr 2  dan word de text blauw

// opdr 3  je moet de input beperken 

<?
