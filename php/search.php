<?php
include 'config.php';

$searchOn = $_POST['searchOn'];

$sql = "SELECT * FROM user ";
$result = $conn->query($sql);

$output = '';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $output .= '<a href="chat.php">
                        <div class="content">
                            <img src="img/' . $row["img_user"] . '" alt="">
                            <div class="details">
                                <span>' . $row["name_user"] . '</span>
                                <p>' . $row["status_user"] . '</p>
                            </div>
                        </div>
                    </a>';
    }
} else {
    $output = '<p>Aucun utilisateur trouv�</p>';
}
echo $output;
?>