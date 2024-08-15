<?php 

include 'config.php';

session_start();

$sql = "SELECT id_user FROM user";
$result = $conn->query($sql);

   




if (!isset($_SESSION['nom_complet'])) {
    header("Location: home.php");
}

?>

<html>
    <head>
        <link rel="stylesheet" href="style2.css">
        <title>Accueil</title>
</head>
<Body>
    <div class ="container">
        <section class="user">
         <header class="profile">
            <div class="content">
                
                <img src="img/<?php echo $row['img_user'] ?>"alt = ""> 
                <div class="details">
<span><?php echo $row['name_user'] ?></span>
<p><?php echo $row['status_user'] ?></p>
                </div>
                <a href="indexx">Se deconnecter</a>
            </div>
         </header>
         <form action="" method="post">
            <input type="text" name="search_box"placeholder="Entrer Nom ou Email">
            <button name="search_user"><img src="img/search.svg" alt=""></button>
         </form>
         <div class="all_user">
            <a href="chat.php">
                <div class="content">
                    <img src="img/avatar.png" alt="">
                    <div class="detail"></div>
                    <span>Salah</span>
                            
                        </div>
                    </div>
                    <div class="status-dot"></div>
                </div>
            </a>
         </div>
        </section>
    </div>

</Body>
</html>
