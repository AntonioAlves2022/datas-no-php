<?php
date_default_timezone_set("America/Sao_Paulo");
include_once "utils.php";
$hoje = date("d/m/Y H:i:s"); //dia, mês e ano
$dia = date("D");

$dia_extenso = getDiaDaSemana($dia);
$mes = date("M");

$d = date("d");
$mes_atual = getMesEmPortugues($mes);
$a = date("Y");

$data_extenso = "$dia_extenso, $d de $mes_atual de $a";
?>

<h2>Hoje é <?= $hoje ?></h2>
<p>Hoje é <?= $dia_extenso ?>
<p>
    <?= $data_extenso ?>
</p>
</p>