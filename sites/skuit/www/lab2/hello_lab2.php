<?
$name = 'Бутаков Никита Александрович';
$age = 18;
?>
<title><?= $name?></title>
<?for ($age; $age > 0; $age-- ):?>
    <p> <?= $age?> Статичный текст </p>
    <?endfor;?>