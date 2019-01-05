<?php 

foreach($products as $product): ?>

	<div class="col-12 flower_box">

		<img src="<?= $product["product_image"]; ?>"/>
		<p><?= $product["product_name"]; ?></p>
		<p><?= $product["product_price"]; ?> sek</p>

	</div>

	<!-- ADD / REMOVE button with UNIQUE value from hidden input to seperate forms --> 

	<form class="form1" action="views/add_chart.php" method="POST">
		<label for="quantity" class="label_qty">Qty &nbsp;</label> 
		<input class="qtybox" id="product" name="product_amount" type="number" value="0" /><br>
		<input type="hidden" id="product_ident" name="product_ident" value="<?= $product["product_id"]; ?>">
		<input type="submit" value="add items to chart" name="add"> 
	</form>

	<form class="form2" action="views/remove_chart.php" method="POST">
		<label for="remove"></label>
		<input type="hidden" id="product_ident" name="product_ident" value="<?= $product["product_id"]; ?>">
		<input type="submit" value="delete all items from chart" name="remove">
	</form>


	<?php endforeach; ?>