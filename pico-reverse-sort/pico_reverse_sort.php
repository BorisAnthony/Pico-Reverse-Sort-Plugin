<?php

/**
 * "Reverse Sort" plugin for Pico
 *
 * @author Boris Anthony
 * @link https://github.com/BorisAnthony
 * @license http://opensource.org/licenses/MIT
 * @version 0.1
 */

class Pico_Reverse_Sort {

  public function get_pages(&$pages, &$current_page, &$prev_page, &$next_page)
  {
    $pages = array_reverse($pages, true);
    return($pages);
  }

}
?>