<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once "utils.php";

$aniversario = new DateTime();
$aniversario->setDate(1981, 12, 23);
echo "<p>" . $aniversario->format("d/m/Y") . "</p>";
$aniversario->setTime(12, 40, 00);
echo "<p>" . $aniversario->format("H:i:s") . "</p>";

$inicio = new DateTime();
$inicio->setTime(8, 0, 0);
echo $inicio->format("H:i:s") . "<br/>";

$fim = $inicio->modify("+4 hours");
echo $fim->format("H:i:s") . "<br/>";

$data_venc = new DateTime();
$data_venc->setDate(2023, 3, 25);
$data_pag = new DateTime();

$atraso = $data_pag->diff($data_venc);
echo "Data de vencimento:" . $data_venc->format("d/m/Y") . "<br/>";
echo "Data de pagamento:" . $data_pag->format("d/m/Y") . "<br/>";
echo "Atraso: " . $atraso->format("%a") . " dias<br/>";

$parcela = 250.45;
$juro = 0.02;
$dias_atraso = intval($atraso->format("%a"));
$multa = $parcela * $juro * $dias_atraso;
$total = $parcela + $multa;
echo "Total a pagar: R$ " . $total;


/*
$hoje = date("d/m/Y");
$data_vencimento = date("d/m/Y", strtotime("-60 days"));
echo "<h1>$hoje - $data_vencimento</h1>";
$aniversario = mktime(12,40,00,12,23,1981);
$data = date("d.m.Y H:i:s", $aniversario);
echo "<h1> $data </h1>";

$hoje = date("d/m/Y H:i:s"); //dia, mês e ano
$dia = date("D");

$dia_extenso = getDiaDaSemana($dia);
$mes = date("M");

$d = date("d");
$mes_atual = getMesEmPortugues($mes);
$a = date("Y");

$data_extenso = "$dia_extenso, $d de $mes_atual de $a";*/