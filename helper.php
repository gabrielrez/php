<?php

function helloWorld()
{
  return "<h3>Hello World</h3><br>";
}


function resumeText(string $text, int $limit): string
{
  $cleanText = trim($text);
  if (mb_strlen($cleanText) <= $limit) {
    return $cleanText;
  } else {
    $resumeText = mb_substr($cleanText, 0, mb_strrpos(mb_substr($cleanText, 0, $limit), ''));
    return $resumeText . "...";
  }
}
