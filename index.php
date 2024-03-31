<?php

require_once 'sistema/configuracao.php';
include_once 'helper.php';

$text = "Esse é o texto a ser resumido";

echo resumeText($text, 25);
