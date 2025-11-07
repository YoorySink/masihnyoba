<?php
class ArrayList {
    private $items = [];
    
    public function add($item) {
        $this->items[] = $item;
    }
    public function getAll() {
        return $this->items;
    }
    public function get($index) {
        return $this->items[$index] ?? null;
    }
}
?>