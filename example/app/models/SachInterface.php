<?php 
namespace App\models;
interface SachInterface{
    function getAllBook();
    function add($name, $author, $quantity, $price);
    function getById($id);
    function update($id,$name, $author, $quantity, $price);
    function delete($id);
}