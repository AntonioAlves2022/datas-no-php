<?php
function getDiaDaSemana($dia)
{
    $dia_semana = array(
        "Sun" => "Domingo",
        "Mon" => "Segunda-feira",
        "Tue" => "Terça-feira",
        "Wed" => "Quarta-feira",
        "Thu" => "Quinta-feira",
        "Fri" => "Sexta-feira",
        "Sat" => "Sábado",
    );

    return $dia_semana[$dia];
}

function getMesEmPortugues($mes){
    $meses_ano = array(
        "Jan" => "Janeiro",
        "Feb" => "Fevereiro",
        "Mar" => "Março",
        "Apr" => "Abril",
        "May" => "Maio",
        "June" => "Junho",
        "July" => "Julho",
        "Aug" => "Agosto",
        "Sep" => "Setembro",
        "Oct" => "Outubro",
        "Nov" => "Novembro",
        "Dec" => "Dezembro"
    );

    return $meses_ano[$mes];
}