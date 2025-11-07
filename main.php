<?php
require 'source/Classintermilan.php';

// === ArrayList ===
$list = new ArrayList();
$list->add("A");
$list->add("B");
$list->add("C");
echo "ArrayList:\n";
print_r($list->getAll());

// === LinkedList ===
$link = new LinkedList();
$link->add("Node1");
$link->add("Node2");
$link->add("Node3");
echo "\nLinkedList:\n";
print_r($link->getAll());

// === Stack ===
$stack = new Stack();
$stack->push("X");
$stack->push("Y");
$stack->push("Z");
echo "\nStack (LIFO):\n";
print_r($stack->getAll());
echo "Pop: " . $stack->pop() . "\n";
print_r($stack->getAll());

// === Queue ===
$queue = new Queue();
$queue->enqueue("1");
$queue->enqueue("2");
$queue->enqueue("3");
echo "\nQueue (FIFO):\n";
print_r($queue->getAll());
echo "Dequeue: " . $queue->dequeue() . "\n";
print_r($queue->getAll());

// === HashMap ===
$map = new HashMap();
$map->put("nama", "Yorline");
$map->put("umur", 21);
$map->put("kota", "Malang");
echo "\nHashMap:\n";
print_r($map->getAll());
echo "Nama: " . $map->get("nama") . "\n";

// === Iterator ===
echo "\nIterator dari ArrayList:\n";
$it = new SimpleIterator($list->getAll());
while ($it->hasNext()) {
    echo $it->next() . " ";
}
echo "\n";
?>
