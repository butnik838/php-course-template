<?php
$name1 = 'Молоток';
$name2 = 'Дрель';
$name3 = 'Лобзик';
$name4 = 'Сверла';
$name5 = 'Отвертка';
$name6 = 'Кувалда';
$name7 = 'Шестигран';
$name8 = 'Гвозди';
$name9 = 'Саморезы';
$name10 = 'Паяльник';
$name11 = 'Рулетка';
$name12 = 'Провода';
$name13 = 'Удлинитель';
$name14 = 'Сварочник';
$name15 = 'Плоскогубцы';

$price1 = 170;
$price2 = 300;
$price3 = 250;
$price4 = 100;
$price5 = 90;
$price6 = 230;
$price7 = 70;
$price8 = 50;
$price9 = 60;
$price10 = 150;
$price11 = 120;
$price12 = 40;
$price13 = 80;
$price14 = 450;
$price15 = 140;

$products = [$name1, $name2, $name3, $name4, $name5, $name6, $name7, $name8, $name9, $name10, $name11, $name12, $name13, $name14, $name15];
$prices = [$price1, $price2, $price3, $price4, $price5, $price6, $price7, $price8, $price9, $price10, $price11, $price12, $price13, $price14, $price15];
?>

<div class="product-list">
    <h3>Товары и цены</h3>

    <?php for ($i = 0; $i < count($products); $i++) { ?>
        <div class="product-card">
            <div class="product-name"><?= $products[$i]?></div>
            <div class="product-price"><?= $prices[$i]?> р</div>
        </div>
    <?php } ?>
</div>