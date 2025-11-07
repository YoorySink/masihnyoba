<?php
require 'ArrayList.php';
$list = new ArrayList();
$list->add("Apple");
$list->add("Banana");
$list->add("Cherry");

print_r($list->getAll());
echo "Data ke-2: " . $list->get(1);
?>