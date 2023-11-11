<?php
$salaries = ['Альберт' => 40200, 'Иннокентий' => 31000, 'Коля' => 104000, 'Валентина' => 27000, 'Александра' => 70000];
?>

<h1 text_align="center">Заработные платы</h1>

<?php foreach ($salaries as $employee => $salary):?>
    <h2><?php echo $employee; ?>: <?php echo $salary . ' р';?></h2>
<?php endforeach ?>

<hr/>
<h1>Зарплата Коли: <?php echo $salaries["Коля"]; ?></h1>