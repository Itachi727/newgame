<?php

session_start();

if (isset($_GET['newFigures']))
  $_SESSION['map'] = 'rnbqkbnrpppppppp11111111111111111111111111111111PPPPPPPPRNBQKBNR';
