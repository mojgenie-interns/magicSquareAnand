<?php
require_once dirname(__FILE__) . '/autoload.php';

use App\TicTacDisplay;
use App\TicTacEntery;
use App\TicTacToe;


$obj= new TicTacToe;
$obj->callTicTacToe();