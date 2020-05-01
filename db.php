<?php
session_start();
require "./libs/rb.php";
  R::setup( 'mysql:host=localhost;dbname=igroteyrpgame',
        'doomedexpert1', '123' ); //for both mysql or mariaDB
?>