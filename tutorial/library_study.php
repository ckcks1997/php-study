<?php

/*autoload 에러시 php.ini에서
include_path = ".;C:\Users\Michael\Downloads\php-7.4.29-Win32-vc15-x64;"
와 같이 php 위치를 설정해줘야 한다.
*/
require 'vendor/autoload.php';
use Michelf\Markdown;

echo date('Y-n-j H:m:s');

/*markdown 라이브러리 사용 예제*/
$text = file_get_contents('..\README.md');
$html = Markdown::defaultTransform($text);
echo $html;

$html = Markdown::defaultTransform("#안녕!"). Markdown::defaultTransform("##안녕!");
echo $html;