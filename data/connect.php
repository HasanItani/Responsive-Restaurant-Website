<?php 

$con  = mysqli_connect('localhost','test','test','cart');

if(!$con ){
    echo "ERROR!";
}

$query = 
'CREATE TABLE IF NOT EXISTS `products` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `name` varchar(250) NOT NULL,
    `code` varchar(100) NOT NULL,
    `price` double(9,2) NOT NULL,
    `image` varchar(250) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `code` (`code`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8';

if(!mysqli_query($con, $query)){
    echo 'Query error: '. mysqli_error($mysqli);
    die();
}
?>