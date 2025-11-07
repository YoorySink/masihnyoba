<?php
interface CollectionInterface {
    public function add($item);
    public function remove($item);
    public function size();
    public function getAll();
}

//List dasar (turunan Collection)
interface ListInterface extends CollectionInterface {
    public function get($index);
}

//Queue (FIFO)
interface QueueInterface extends CollectionInterface {
    public function enqueue($item);
    public function dequeue();
}

//Map (key-value)
interface MapInterface {
    public function put($key, $value);
    public function get($key);
    public function remove($key);
    public function size();
    public function getAll();
}

//Iterator (perulangan elemen)
interface IteratorInterface {
    public function hasNext();
    public function next();
}
?>