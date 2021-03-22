<?php
$firstname = "Tom";
$lastname = "Jerry";

$sayHello = fn() => "Hello {$firstname} {$lastname}";

echo $sayHello();