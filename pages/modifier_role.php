<?php 
require_once 'c:/wamp64/www/belevedere/config.php';

$sql = "UPDATE user SET 
    role = :role
    WHERE id = :id";
    $db = config::getConnexion();
    $stmt = $db->prepare($sql);
    if (isset($_POST['admin'])) {
      $stmt->execute(
        [
          'role' => 'admin',
          'id' => $res['id']
        ]
      );
    }
    if (isset($_POST['user'])) {
      $stmt->execute(
        [
          'role' => 'user',
          'id' => $res['id']
        ]
      );
    }
    header('Location: tables.php');

    ?>