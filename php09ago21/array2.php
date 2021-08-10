<?php

$frutas = array(
    "Abacaxi",
    "Limão",
    "Laranja",
    "Tangerina",
    "Maça",
    "Uva",
    "Romã",
    "Tomate",
    "Goiaba",
    "Muricí"
);
echo "<br>============Frutas============<br>";
foreach($frutas as $fruta){
    echo "Fruta: ".$fruta."<br>";
}
echo "<br>============Livros============<br>";
$livros = array(
    "O triste fim de Policarpo quaresma" => "8",
    "O Homem Duplicado" => "7",
    "O Ensaio sobre a cegueira" => "10",
    "1984" =>"10",
    "Fahrenheit 451" => "8",
    "A revolução dos Bichos" => "8",
    "O presidente negro ou Choque das Raças" => "1",
    "Memorial de Maria Moura" => "8",
    "O quinze" => "8",
    "A cidade e as serras" => "10"
);
foreach($livros as $livro){
    echo $livro."<br>";
}
echo "<br>============Emails============<br>";
$emails = array(
    "João"=>"joao@gmail.com",
    "Marcos"=>"felipe-marcos10@hotmail.com",
    "Fulano"=>"fulano@gmail.com",
    "Beltrano"=>"beltrano@gmail.com",
    "Cicrano"=>"cicrano@gmail.com",
    "Deltrano"=>"deltrano@gmail.com",
    "Periclano"=>"periclano@gmail.com",
    "Jucrano"=>"jucrano@gmail.com",
    "Ronaldinho"=>"ronaldinho@gmail.com",
    "Renata"=>"renata.ingrata@gmail.com"
);
foreach($emails as $email){
    echo $email."<br>";
}