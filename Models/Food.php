<?php
class Food extends Product {
  public $weight;
  public $ingredients;
  public $type;
  public $age;

  /**
   * @param Number $weight
   * @param Array $ingredients
   * @param String $type
   * @param String $age
   */
  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_is_available, $_weight, $_ingredients, $_type, $_age)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_is_available);
    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
    $this->type = $_type;
    $this->age = $_age;
  }
}
?>