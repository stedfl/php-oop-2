<?php
class Product {
  public $id;
  public $name;
  public $brand;
  public $category;
  public $price;
  protected $discount = 0;
  public $quantity;
  public $is_available;
  public $image = 'https://st4.depositphotos.com/14953852/22772/v/600/depositphotos_227725020-stock-illustration-image-available-icon-flat-vector.jpg';

  /**
   * @param Number $id
   * @param String $name
   * @param String $brand
   * @param Category $category
   * @param Number $price
   * @param Number $discount
   * @param Number $quantity
   * @param Boolean $is_available
   * @param String $image
   */
  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_quantity)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->brand = $_brand;
    $this->category = $_category;
    $this->price = $_price;
    $this->quantity = $_quantity;
    $this->is_available = $this->set_availability($_quantity);
  }

  public function set_image($_image) {
    $this->image = $_image;
  }

  public function set_availability($_quantity) {
    if ($_quantity > 0) {
      return true;
    } else {
      return false;
    }
  }
}

?>