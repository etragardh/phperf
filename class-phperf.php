<?php
/**
 * PHPerf
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
   * Stop timer
   */
  public static function stop() {
    $time = hrtime( true );
    $diff = ( $time - self::$start ) / 100000;
    echo "Time: $diff ms\r\n";
    echo "Max Memory: " . round( memory_get_peak_usage() / 1024 / 1024, 3 ) . " mb\r\n";
  }

}
