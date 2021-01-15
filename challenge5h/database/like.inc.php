<?php
  function like() {

    alert();
    $sql = "UPDATE tb_faq SET clicks = clicks + 1 ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
  }

  if (isset($_GET['like'])) {
    like();
  }
?>