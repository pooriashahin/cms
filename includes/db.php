<?php

$connection = mysqli_connect('localhost', 'root', '', 'cms');
if (!$connection){
    echo "DB connection failed!" . mysqli_error();
}