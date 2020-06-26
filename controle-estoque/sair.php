<?php
session_start();

unset($_SESSION['getInfo']);

header("Location: login.php");