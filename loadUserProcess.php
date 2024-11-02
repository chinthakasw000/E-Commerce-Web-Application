<?php

include "connection.php";

$rs = Database::search("SELECT * FROM `user` WHERE `user_type_id` = '2'");
$num = $rs->num_rows;

for ($i = 0; $i < $num; $i++) {
    $d = $rs->fetch_assoc();
?>

    <tr>
    <td class="card-title text-warning"><?php echo $d["id"]; ?></td>
        <td class="text-warning"><?php echo $d["fname"] ?></td>
        <td class="text-warning"><?php echo $d["lname"] ?></td>
        <td class="text-warning"><?php echo $d["email"] ?></td>
        <td class="text-warning"><?php echo $d["mobile"] ?></td>
        <td class="text-warning"><?php
            if ($d["status"] == 1) {
                echo ("Active");
            } else {
                echo ("Deactive");
            }
            ?></h4>
    </tr>

<?php

}

?>