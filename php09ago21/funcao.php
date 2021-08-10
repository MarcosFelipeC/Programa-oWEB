<?php
$nome = "marcos";
$email = "felipe-marcos10@hotmail.com";
function cxAlta($stringIn){
    echo strtoupper($stringIn)."<br>";
}
cxAlta($nome);
cxAlta($email);

echo "<br>===============================<br>";
$anoNascimento = 2001;
function idade($nascimento){
    return 2021 - $nascimento;
}
echo "Idade: ".idade($anoNascimento)." anos";