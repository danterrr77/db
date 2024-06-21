<?php
$dbc = mysqli_connect('localhost','root','' ,'bd')
or die('ошибка'. mysqli_connect_error());
mysqli_set_charset($dbc, 'utf-8');