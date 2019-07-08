<?php
# $query = $_POST[];
$query = $_GET['q'];
print_r($query, true);
$fp = file_put_contents( 'requests.txt', $query );

?> 