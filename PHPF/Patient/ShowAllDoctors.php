<?php
include_once '../connectDataBase.php';

$doctors = ShowPhysicianInfo();

echo $doctors;