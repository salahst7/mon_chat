<?php 

include 'php/config.php';
session_start();

$sql = "SELECT id_user, name_user, email_user, img_user, status_user, password_user FROM user";
$result = $conn->query($sql);

if (isset($_SESSION['nom_complet'])) {
    header("Location: home.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Accueil</title>
</head>
<body>
    <div class="container">
        <section class="user">
            <header class="profile">
                <div class="content">
                    <?php
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                    ?>
                    <img src="img/<?php echo $row["img_user"]; ?>" alt="">
                    <div class="details">
                        <span><?php echo $row["name_user"]; ?></span>
                        <p><?php echo $row["status_user"]; ?></p>
                    </div>
                    <a href="indexx.php">Se déconnecter</a>
                </div>
            </header>

            <form action="" method="post" class="search">
                <input type="text" name="search_box" placeholder="Entrer Nom ou Email">
                <button name="search_user"><img src="img/search.svg" alt=""></button>
            </form>

            <div class="all_user">
               <!-- <a href="chat.php">
                <div class="content">
                    <img src="img/avatar.png" alt="">
                    <div class="detail"></div>
                    <span>Salah</span>
                            
                        </div>
                    </div>
                    <div class="status-dot"></div>
                </div>
            </a>-->
            </div>
            <?php
                        }
                    
            ?>
        </section>
    </div>

    <script>
        const searchBar = document.querySelector(".search input"),
            allUsers = document.querySelector(".all_user");

        searchBar.onkeyup = () => {
            let searchOn = searchBar.value;
            if (searchOn != "") {
                searchBar.classList.add("active");
            } else {
                searchBar.classList.remove("active");
            }

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "php/search.php", true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response;
                        allUsers.innerHTML = data;
                    }
                }
            };
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("searchOn=" + searchOn);
        }

        setInterval(() => {
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "php/home.php", true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response;
                        if (!searchBar.classList.contains("active")) {
                            allUsers.innerHTML = data;
                        }
                    }
                }
            };
            xhr.send();
        }, 500);
    </script>
</body>
</html>
