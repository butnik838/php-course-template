<?php
$allHobits = ["Сэм", "Пин", "Мари", "Поло", "Кон", "Фиран", "Тод", "Зара"];

$partySize = rand(2, 5);

shuffle($allHobits);
$party = array_slice($allHobits, 0, $partySize);
$partyNames = implode(", ", $party);
$countParty = count($party);

$transport = ["лошадь", "лодка", "повозка", "слон", "нет танспорта"];
$countTransport = count($transport) - 1;
$randTransport = rand(0, $countTransport);
$nameRandTransport = $transport[$randTransport];

$allSupplies = ["пирожки", "бананы", "колбаса", "чай", "сыр", "ананасы", "молоко"];

$suppliesSize = rand(2, 6);

shuffle($allSupplies);
$supplies = array_slice($allSupplies, 0, $suppliesSize);

$partyEvents = [
    "{hobbit} решил испечь пирог перед выходом.",
    "{hobbit} не смог найти свой плащ, пришлось искать всем вместе.",
    "{hobbit} потерял карту пришлось искать по всему дому.",
    "{hobbit} помог собрать лишний мешок орехов, и это задержало выход.",
    "{hobbit} наоборот всех поторопил, и сборы пошли быстрее.",
];

$delayDays = count($supplies);


?>

<h1>🧙‍♂️ Подготовка хоббитов к путешествию</h1>

<div class='block'>
    В поход отправятся  <?= $countParty?> хоббитов: <?= $partyNames?><br>
</div>

<div class='block'>
    <?if ($nameRandTransport === 'нет транспорта') {?>
        К сожалению, транспорта нет. Хоббтиам придется идти пешком!
    <?} else {?>
        Хоббиты нашли транспорт: <?=$nameRandTransport?>
    <?}?>
</div>

<div class='block'>
    Собрали припасы:<br>
    <?foreach ($supplies as $value) {
        echo("- $value <br>");
    }?>
</div>
