<?php 
class Format {
  public $size;
  public $length;
  public $width;
  public $heigth;
  public $color;

  /**
   * @param String $size
   * @param Number $length
   * @param Number $width
   * @param Number $heigth
   * @param Array $color
   */
  public function __construct($_size,$_length, $_width, $_heigth = null, $_color)
  {
    $this->size = $_size;
    $this->length = $_length;
    $this->width = $_width;
    $this->heigth = $_heigth;
    $this->color = $_color;
  }

  public function format_dimension() {
    if(!is_null($this->length)) {
      $format_array[] = $this->length;
    }
    if(!is_null($this->width)) {
      $format_array[] = $this->width;
    }
    if(!is_null($this->heigth)) {
      $format_array[] = $this->heigth;
    }
    return implode('x', $format_array);
  }
}
?>