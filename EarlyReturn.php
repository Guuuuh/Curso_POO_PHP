<?php
// Usando elseif e else, sem aplicar o EarlyReturn;
function formatDate($date)
{
    $format = DateTime::ATOM;
    if ($date instanceof DateTime) {
        $d = $date->format($format);
    } elseif (is_numeric($date)) {
        $d = date($format, $date);
    } else {
        $d = (string) $date;
    }
    return $d;
}
// Utilizando o conceito Early Return, o código fica sem else;
function formatDateWithEarlyReturn($date)
{
    $format = DateTime::ATOM;

    if ($date instanceof DateTime) {
        return $date->format($format);
    }

    if (is_numeric($date)) {
        return date($format, $date);
    }

    return (string) $date;
}
