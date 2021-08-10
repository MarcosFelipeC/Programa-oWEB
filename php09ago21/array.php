<?php
$numero = 12;
$mes = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro", "Inválido");
if ($numero < 1 || $numero > 12) echo $mes[12];
else echo $mes[$numero - 1];
