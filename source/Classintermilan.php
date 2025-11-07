<?php
require 'intermilan.php';

class ArrayList implements ListInterface {
    private $items = [];

    public function add($item) { $this->items[] = $item; }
    public function remove($item) {
        $index = array_search($item, $this->items);
        if ($index !== false) unset($this->items[$index]);
        $this->items = array_values($this->items);
    }
    public function size() { return count($this->items); }
    public function getAll() { return $this->items; }
    public function get($index) { return $this->items[$index] ?? null; }
}


class LinkedList implements ListInterface {
    private $items = [];

    public function add($item) { $this->items[] = $item; }
    public function remove($item) {
        $index = array_search($item, $this->items);
        if ($index !== false) unset($this->items[$index]);
        $this->items = array_values($this->items);
    }
    public function size() { return count($this->items); }
    public function getAll() { return $this->items; }
    public function get($index) { return $this->items[$index] ?? null; }
}


class Stack implements ListInterface {
    private $items = [];

    public function add($item) { $this->push($item); }
    public function remove($item) { /* optional */ }
    public function size() { return count($this->items); }
    public function getAll() { return $this->items; }
    public function get($index) { return $this->items[$index] ?? null; }

    public function push($item) { array_push($this->items, $item); }
    public function pop() { return array_pop($this->items); }
}


class Queue implements QueueInterface {
    private $items = [];

    public function add($item) { $this->enqueue($item); }
    public function remove($item) { /* optional */ }
    public function size() { return count($this->items); }
    public function getAll() { return $this->items; }

    public function enqueue($item) { array_push($this->items, $item); }
    public function dequeue() { return array_shift($this->items); }
}

class HashMap implements MapInterface {
    private $map = [];

    public function put($key, $value) { $this->map[$key] = $value; }
    public function get($key) { return $this->map[$key] ?? null; }
    public function remove($key) { unset($this->map[$key]); }
    public function size() { return count($this->map); }
    public function getAll() { return $this->map; }
}

class SimpleIterator implements IteratorInterface {
    private $items;
    private $position = 0;

    public function __construct($items) {
        $this->items = array_values($items);
    }
    public function hasNext() {
        return $this->position < count($this->items);
    }
    public function next() {
        return $this->items[$this->position++];
    }
}
?>
