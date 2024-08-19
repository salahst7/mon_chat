<?php 

include 'php/config.php';



if (isset($_POST['submit'])) {
	$name_user = $_POST['name_user'];
    $email_user = $_POST['email_user'];
    $password_user = $_POST['password_user'];
    $img_user = $_POST['img_user'];
	
        if(filter_var($email_user, FILTER_VALIDATE_EMAIL)){
            
            $status_user = 'Active ';

            $select = mysqli_query($conn, "SELECT * FROM user WHERE email_user = '$email_user' 
                                    AND password_user = '$password_user' ");
            if(mysqli_num_rows($select) > 0){
                $alert[] = "user already exist!";
            }else{
               
                    $insert = mysqli_query($conn, "INSERT INTO user(id_user, name_user, email_user, password_user, img_user, status_user) 
                    VALUES ('$id_user','$name_user','$email_user','$password_user','$img_user','$status_user')");
                       
                    if($insert){ 
                        
                        header('location: login.php');
                    }else{
                        $alert[] = "connection failed please retry!";
                    }
                }
            } 
        }        
?>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation de Compte</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="container">
    <h2>Creer un Compte</h2>
    <form action="" method="POST" enctype="multipart/form-data">
               <label for="name_user">Nom d'utilisateur :</label>
        <input type="text" id="name_user" name="name_user" required>

        <label for="email_user">Adresse e-mail :</label>
        <input type="email" id="email_user" name="email_user" required>

        <label for="password_user">Mot de passe :</label>
        <input type="password" id="password_user" name="password_user" required>

        <label for="img_user">Image de profil :</label>
        <input type="file" id="img_user" name="img_user" accept="img/*">
        
        <button type="submit" name="submit" class="btn">Creer un Compte</button>
        
        <p>Vous avez deja un compte ?<a href="login.php">Connectez-vous.</a></p>

        
    </form>
</div>

</body>
</html>
