<?php
class Kennel extends Product {
  public $format;
  public $is_external;
  public $is_washing_machine;
  public $description;

  /**
   * @param Format $format
   * @param Boolean $is_external
   * @param Boolean $is_washing_machine
   * @param String $description
   */
  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_is_available, Format $_format, $_is_external, $_is_washing_machine)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_is_available);
    $this->format = $_format;
    $this->is_external = $_is_external;
    $this->is_washing_machine = $_is_washing_machine;
    $this->description = "";
  }
}
?>