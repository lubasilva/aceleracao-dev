<?php

class Order
{
    public function calculateTotalSum(){}
    public function getItems(){}
    public function getItemCount(){}
    public function addItem($item){}
    public function deleteItem($item){}
}

class RepositoryOrder
{
    public function load(){}
    public function save(){}
    public function update(){}
    public function delete(){}
}

class ViewOrder
{
    public function printOrder(){}
    public function showOrder(){}
}
