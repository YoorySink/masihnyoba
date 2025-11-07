<?php
require 'interface.php';

class ArrayList implements ListInterface {
    private $items = [];

    public function add($item) {
        $this->items[] = $item;
    }

    public function remove($item) {
        $index = array_search($item, $this->items);
        if ($index !== false) unset($this->items[$index]);
    }

    public function size() {
        return count($this->items);
    }

    public function getAll() {
        return $this->items;
    }

    public function get($index) {
        return $this->items[$index] ?? "Data tidak ditemukan";
    }

    public function set($index, $value) {
        $this->items[$index] = $value;
    }
}

class LinkedList implements ListInterface {
    private $nodes = [];

    public function add($item) {
        $this->nodes[] = $item;
    }

    public function remove($item) {
        $index = array_search($item, $this->nodes);
        if ($index !== false) unset($this->nodes[$index]);
    }

    public function size() {
        return count($this->nodes);
    }

    public function getAll() {
        return $this->nodes;
    }

    public function get($index) {
        return $this->nodes[$index] ?? "Node tidak ditemukan";
    }

    public function set($index, $value) {
        $this->nodes[$index] = $value;
    }
}

//Stack (LIFO)
class Stack implements CollectionInterface {
    private $stack = [];

    public function add($item) { 
        array_push($this->stack, $item);
    }

    public function remove($item) {
        $index = array_search($item, $this->stack);
        if ($index !== false) unset($this->stack[$index]);
    }

    public function size() {
        return count($this->stack);
    }

    public function getAll() {
        return $this->stack;
    }

    public function push($item) {
        $this->add($item);
    }

    public function pop() {
        return array_pop($this->stack) ?? "Stack kosong";
    }

    public function peek() {
        return end($this->stack) ?: "Stack kosong";
    }
}

//Queue (FIFO)
class Queue implements QueueInterface {
    private $queue = [];

    public function enqueue($item) {
        array_push($this->queue, $item);
    }

    public function dequeue() {
        return array_shift($this->queue) ?? "Queue kosong";
    }

    public function peek() {
        return $this->queue[0] ?? "Queue kosong";
    }

    public function add($item) {
        $this->enqueue($item);
    }

    public function remove($item) {
        $index = array_search($item, $this->queue);
        if ($index !== false) unset($this->queue[$index]);
    }

    public function size() {
        return count($this->queue);
    }

    public function getAll() {
        return $this->queue;
    }
}

//HashMap (key-value)
class HashMap implements MapInterface {
    private $map = [];

    public function put($key, $value) {
        $this->map[$key] = $value;
    }

    public function get($key) {
        return $this->map[$key] ?? "Key tidak ditemukan";
    }

    public function remove($key) {
        if (isset($this->map[$key])) unset($this->map[$key]);
    }

    public function size() {
        return count($this->map);
    }

    public function getAll() {
        return $this->map;
    }
}
?>
