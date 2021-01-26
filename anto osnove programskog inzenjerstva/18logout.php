<?php
session_start();
session_destroy();
header("Location: 16index.php");
die();