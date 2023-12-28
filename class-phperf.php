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
  private static $session_name;

  /**
   * Start timer
   * and resett max memory counter
   */
  public static function start( $session_name = 'PHPerf Testing' ) {
    self::$session_name = $session_name;
    memory_reset_peak_usage();
    self::$start = hrtime( true );
  }

  /**
   * Stop timer & print results
   *
   * Max Memory does not report max memory between calls as the timer does.
   * If you want to measure memory make sure nothing else in you php code is peaking.
   * IE unset( $large_var ); large variables before measuring.
   */

  public static function stop() {
    $time = hrtime( true );
    $diff = ( $time - self::$start ) / 100000;
    $mem = round( memory_get_peak_usage() / 1024 / 1024, 4 );
    $name = self::$session_name;

    echo "##################################################\r\n";
    echo "# Session:\t\t$name\r\n";                // Name of the testing session 
    echo "# Time:\t\t\t$diff ms\r\n";                // Time is displayd in ms with maximum precision
    echo "# Max Memory(*):\t" . $mem . " mb\r\n";  // Memory is displayed in mb with reasonable precision.
  }
}
