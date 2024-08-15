<?php
include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['nom_complet'])) {
    header("Location: home.php");
}

if (isset($_POST['submit'])) {
	$email_user = $_POST['email_user'];
    $password_user = $_POST['password_user'];


	$sql = "SELECT * FROM user WHERE email_user = '$email_user' 
                                    AND password_user = '$password_user' ";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['nom_complet'] = $row['nom_complet'];
		header("Location: home.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
?>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="container">
    <h2>Bienvenue</h2>
    <form action="" method="post" enctype="multipart/form-data">
               
        <label for="email_user">Adresse e-mail :</label>
        <input type="email" id="email_user" name="email_user" required>

        <label for="password_user">Mot de passe :</label>
        <input type="password" id="password_user" name="password_user" required>

        
        
        <button type="submit"name="submit">Se connecter</button>
        
        <p>Besoin d'un compte?<a href="indexx.php">Inscrivez-vous maintenant!</a></p>

        
    </form>
</div>

</body>
</html>
