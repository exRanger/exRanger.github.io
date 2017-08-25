<?php

$recepient = "gc_collect_cycles";
$sitename = "";

$gd_infoname = trim($_GET["name"]);


$title = "From\"$sitename\"";
$timing = "ISA: $name \nТелефон: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");