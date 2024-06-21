<?php
require('sign_2.php');
$sql= ' CREATE TABLE IF NOT EXISTS forum
(
zagolovok VARCHAR(40)  NOT NULL ,
soderjanie VARCHAR(150) NOT NULL)';
if (mysqli_query($dbc,$sql)===TRUE){
    echo  'Таблица "forum" успешно создана';
} else{
    echo  'Ошибка создания таблицы:'.mysqli_error($dbc) ;
}

mysqli_close($dbc);
?>