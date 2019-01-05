 <?php

 $statement = $pdo->prepare("SELECT * FROM products");

    $statement->execute();

    $products = $statement->fetchAll(PDO::FETCH_ASSOC);

 ?>