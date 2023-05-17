<?php
    if(isset($_POST['send'])){ //si il existe des informations envoyer par la method post
         if(isset($_POST['username']) &&
            isset($_POST['email']) &&
            $_POST['username'] != ""  &&
            $_POST['username'] != ""
            ){ 
                include_once "connect_ddb.php"; 
                extract($_POST);

                $sql = "INSERT INTO users (username, email) VALUES ('$username','$email')";
                if (mysqli_query($conn, $sql))  { 
                    header("location:showUser.php");
                }else{ 
                    header("location:addUser.php?message=AddFail");
                }
            }else { 
                header("location:addUser.php?message=EmptyFields");
            }
    }
            
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>ajouter un utilisateur</h1>
          <input type="text" name="username" placeholder="Username"> <br>
          <input type="email" name="email" placeholder="Email"> <br>
          <input class="couleur" type="submit" value="Ajouter" name="send"> <br>
         <a class="link back " href="showUser.php">annuler</a>
    </form>
</body>
</html>