<?       

$statement = $pdo->prepare("SELECT product_name, product_price, product_amount FROM Order_table
  JOIN products 
  ON Order_table.product_id = products.product_id 
  JOIN users 
  ON users.user_id = Order_table.user_id
  WHERE users.username = :username");

$statement->execute( 
  [
    ":username" => $_SESSION["username"]
  ]
);

$products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>