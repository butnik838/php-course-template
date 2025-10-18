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

$products2 = ['Молоток', 'Дрель', 'Лобзик', 'Сверла', 'Отвертка', 'Кувалда', 'Шестигран', 'Гвозди', 'Саморезы', 'Паяльник'];
$price2 = [170, 300, 250, 100, 90, 230, 70, 50, 60, 150];

$products2 [] = 'Рулетка';
$products2 [] = 'Провода';
$products2 [] = 'Удлинитель';

$price2 [] = 120;
$price2 [] = 40;
$price2 [] = 80;

$items []= ['Кисть', 65];
$items []= ['Рулетка', 100];
$items []= ['Провод', 75];
$items []= ['Веревка', 55];
$items []= ['Стол', 300];
$items []= ['Перфоратор', 170];
$items []= ['Лампа', 45];
$items []= ['Цемент', 110];
$items []= ['Часы', 95];
$items []= ['Паркет', 350];


$goods [] = ['name' => 'Кисть', 'price' => 65];
$goods [] = ['name' => 'Рулетка', 'price' => 100];
$goods [] = ['name' => 'Провод', 'price' => 75];
$goods [] = ['name' => 'Веревка', 'price' => 55];
$goods [] = ['name' => 'Стол', 'price' => 300];
$goods [] = ['name' => 'Перфоратор', 'price' => 170];
$goods [] = ['name' => 'Лампа', 'price' => 45];
$goods [] = ['name' => 'Цемент', 'price' => 110];
$goods [] = ['name' => 'Часы', 'price' => 95];
$goods [] = ['name' => 'Паркет', 'price' => 350];

$randChislo = rand(12, 20);
$goodsRandom = [];

for ($i = 0; $i < $randChislo; $i++) {
    $goodsRandom [] = $goods[array_rand($goods)];
}
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

<div class="product-list">
    <h3>Товары и цены</h3>

    <?php for ($i = 0; $i < count($products2); $i++) { ?>
        <div class="product-card">
            <div class="product-name"><?= $products2[$i]?></div>
            <div class="product-price"><?= $price2[$i]?> р</div>
        </div>
    <?php } ?>
</div>

<div class="product-list">
    <h3>Товары и цены 3 </h3>

    <?php foreach ($items as $item) { ?>
        <div class="product-card">
            <div class="product-name"><?= $item[0]?></div>
            <div class="product-price"><?= $item[1]?> р</div>
        </div>
    <?php } ?>
</div>

<div class="product-list">
    <h3>Товары и цены 4 </h3>

    <?php foreach ($goods as $item) { ?>
        <div class="product-card">
            <div class="product-name"><?= $item['name']?></div>
            <div class="product-price"><?= $item['price']?> р</div>
        </div>
    <?php } ?>
</div>

<div class="product-list">
    <h3>Случайные элементы </h3>

    <?php foreach ($goodsRandom as $item) { ?>
        <div class="product-card">
            <div class="product-name"><?= $item['name']?></div>
            <div class="product-price"><?= $item['price']?> р</div>
        </div>
    <?php } ?>
</div>


<div class="product-list">
    <h3>Условия </h3>

    <?php foreach ($goodsRandom as $item) { ?>
        <? if ($item['price'] > 70 and $item['price'] < 300) {?>
        <div class="product-card">
            <div class="product-name"><?= $item['name']?></div>
            <div class="product-price"><?= $item['price']?> р</div>
        </div>
        <?}?>
    <?php } ?>
</div>