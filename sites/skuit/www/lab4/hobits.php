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
$randNum = rand(1, 3);

shuffle($partyEvents);
$days = array_slice($partyEvents, 0, $randNum);

$nazgulDays = 5;

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
    
</div>

<div class='block'>
    Собрали припасы:<br>
    <?foreach ($supplies as $value) {
        echo("- $value <br>");
    }?>
</div>

<div class='block'>
    Случайные события:<br>
    <?foreach ($days as $value) {
        $randEvent1 = $party[array_rand($party)];
        $event = str_replace("{hobbit}", $randEvent1, $value);
        echo("- $event <br>");
        $delayDays++;
    }?>
</div>

<div class='block'>
    Сколько дней добирались Хоббиты:<br>
    <?php
    if ($delayDays < $nazgulDays) {
        echo " Хоббиты успели выйти в путь раньше назгулов!";
    } elseif ($delayDays == $nazgulDays) {
        echo " Хоббиты успели от назгулов в самый последний момент!";
    } else {
        $late = $delayDays - $nazgulDays;
        echo " назгулы настигли хоббитов! Опоздали на $late дней!";
    }
    ?>
</div>