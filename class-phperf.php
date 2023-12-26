<?php
/**
 * PHPerf
 *
 * @author    Etragardh
 * @version   0.1
 * @copyright Emil Trägårdh
 * @license   GPL v3
 *
 * Measure execution time and memory peak usage for any PHP script.
 * Suitable for development purposes only. Best practice is to remove
 * from production environment. Alternatively you can put class-phperf.php
 * to your .gitignore and comment out the PHPerf::start/stop() lines
 * before committing.
 */

class PHPerf {

  private static $start;

  /**
   * Start timer
   */
  public static function start() {
    self::$start = hrtime( true );
  }

  /**
   * Stop timer & print results
   */
  public static function stop() {
    $time = hrtime( true );
    $diff = ( $time - self::$start ) / 100000;
    echo "##############################################\r\n";
    // Time is displayd in ms with maximum precision
    echo "# Time\t\t$diff ms\r\n";
    // Memory is displayed in mb with reasonable precision.
    echo "# Max Memory\t" . round( memory_get_peak_usage() / 1024 / 1024, 4 ) . " mb\r\n";
  }
}
