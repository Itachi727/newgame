<?php

session_start();

if (isset($_GET['newFigures']))
  $_SESSION['map'] = 'rnbqkbnrpppppppp11111111111111111111111111111111PPPPPPPPRNBQKBNR';

if (isset($_GET['newFigures']))
  echo $_SESSION['map'];

if (isset($_GET['newFigure'])) {
  $frCoord = $_GET['frCoord'];
  $toCoord = $_GET['toCoord'];
  $figure = $_SESSION['map'][$frCoord];
  $_SESSION['map'][$frCoord] = '1';
  $_SESSION['map'][$frCoord] = '$figures';
  echo $_SESSION['map'];
}
