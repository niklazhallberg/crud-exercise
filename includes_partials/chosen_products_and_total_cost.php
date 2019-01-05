<?php

$total_sum = 0;

foreach($products as $product): ?>

	<div class="col-12 flower_box">

		<p><u><?= $product["product_name"]; ?></u></p>
		<p><?= $product["product_price"]; ?> sek / pcs</p>
		<p><?= $product["product_amount"]; ?> pcs</p>
		<? $sum = (($product["product_price"]) * ($product["product_amount"])); ?>
		<p><?= $sum ?> sek</p><br>

		<? $total_sum = $total_sum + (($product["product_price"]) * ($product["product_amount"])); ?>

	</div>

<?php endforeach; ?>

<p class="total_sum_text">Total Sum: </p><p><b>&#x219D; <?= $total_sum ?> sek</b></p>