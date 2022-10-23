<?php


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once(__DIR__.'/../vendor/autoload.php');

require '../Controllers/IMotor.php';
require '../Controllers/MotorCarro.php';
require '../Controllers/Main.php';

use App\Controllers\IMotor;
use App\Controllers\MotorCarro;
use App\Controllers\Main;

    $im = new IMotor();
    $mc = new MotorCarro();
    $mn = new Main();
