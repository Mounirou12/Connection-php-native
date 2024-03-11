<?php

$pdo = new Pdo('mysql:host=localhost;port=3306;dbname=inscription','mounir','agnila10');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
