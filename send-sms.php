<?php

require 'vendor/autoload.php';

use Minerva\TotalVoice\TotalVoice;
use Minerva\TotalVoice\SMS\SMS;


$sms = new SMS();
$sms->setNumber(21976059613);
$sms->setText("Venda bilionária feita! Pagar mais cervejas!!");

TotalVoice::$token = '93c7a449a6aa832bf0f433f5409ee4c5';
$response = TotalVoice::sendSms($sms);
var_dump($response->getContent());
