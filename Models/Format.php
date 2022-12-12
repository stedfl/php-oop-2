<?php 
class Format {
  public $size;
  public $heigth;
  public $length;
  public $color;

  /**
   * @param String $size
   * @param Number $heigth
   * @param Number $length
   * @param Array $color
   */
  public function __construct($_size, $_heigth, $_length, $_color)
  {
    $this->size = $_size;
    $this->heigth = $_heigth;
    $this->length = $_length;
    $this->color = $_color;
  }
}
?>