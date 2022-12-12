<?php
class Category {
  public $name;
  public $icon;

  /**
   * @param String $name
   * @param String $icon
   */
  public function __construct($_name, $_icon)
  {
    $this->name = $_name;
    $this->icon = $_icon;
  }
}
?>