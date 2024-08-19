<?php
include 'config.php';

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

$output = '';

if ($result->num_rows == 0) {
    while ($row = $result->fetch_assoc()) {
        $output = '<p>Aucun utilisateur trouvé</p>';
    }
} else {
    
    include 'php/user_data.php';
}

echo $output;
?>
