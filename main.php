<?php
require 'ClassCollection.php';


echo "=== ArrayList ===\n";
$list = new ArrayList();
$list->add("Apel");
$list->add("Mangga");
$list->add("Jeruk");
echo "Isi awal: \n";
print_r($list->getAll());
$list->set(1, "Durian");
$list->remove("Jeruk");
echo "Isi akhir: \n";
print_r($list->getAll());
echo "Jumlah elemen: " . $list->size() . "\n\n";


echo "=== LinkedList ===\n";
$link = new LinkedList();
$link->add("Node1");
$link->add("Node2");
$link->add("Node3");
echo "Isi awal: \n";
print_r($link->getAll());
$link->set(0, "NodeAwal");
$link->remove("Node2");
echo "Isi akhir: \n";
print_r($link->getAll());
echo "Node[1]: " . $link->get(1) . "\n";
echo "Jumlah node: " . $link->size() . "\n\n";


echo "=== Stack (LIFO) ===\n";
$stack = new Stack();
$stack->push("Langkah1");
$stack->push("Langkah2");
$stack->push("Langkah3");
echo "Isi stack: \n";
print_r($stack->getAll());
echo "Elemen teratas: " . $stack->peek() . "\n";
echo "Pop: " . $stack->pop() . "\n";
echo "Isi stack sekarang: \n";
print_r($stack->getAll());
echo "\n";


echo "=== Queue (FIFO) ===\n";
$q = new Queue();
$q->enqueue("Antrian1");
$q->enqueue("Antrian2");
$q->enqueue("Antrian3");
echo "Isi queue: \n";
print_r($q->getAll());
echo "Dequeue: " . $q->dequeue() . "\n";
echo "Peek sekarang: " . $q->peek() . "\n";
echo "Isi queue sekarang: \n";
print_r($q->getAll());
echo "\n";


echo "=== HashMap ===\n";
$map = new HashMap();
$map->put("nama", "lutpi");
$map->put("umur", 28);
$map->put("hobi", "mancing");
echo "Isi hashmap:\n";
print_r($map->getAll());
$map->remove("umur");
echo "Setelah remove 'umur':\n";
print_r($map->getAll());
echo "Jumlah data: " . $map->size() . "\n";
?>
