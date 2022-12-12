<?php
class Toy extends Product {
  public $material;
  public $min_age;
  public $type;
  public $description;

  /**
   * @param Array $material
   * @param Number $min_age
   * @param String $type
   * @param String $description
   */
  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_quantity, $_material, $_min_age, $_type)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_quantity);
    $this->material = $_material;
    $this->min_age = $_min_age;
    $this->type = $_type;
  }
}
?>