<?php
class Toy extends Product {
  public $material;
  public $feature;
  public $min_age;
  public $type;
  public $description;

  /**
   * @param Array $material
   * @param String $feature
   * @param Number $min_age
   * @param String $type
   * @param String $description
   */
  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_is_available, $_material, $_feature, $_min_age, $_type)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_is_available);
    $this->material = $_material;
    $this->feature = $_feature;
    $this->min_age = $_min_age;
    $this->type = $_type;
  }
}
?>