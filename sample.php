<?php

require_once( 'class-phperf.php' );

PHPerf::start();

for ( $i=0; $i<=10; $i++ ) {
  echo "Hello ({$i})\r\n";
}
$file_contents = file_get_contents("/Users/bew/Downloads/vulnerabilities.production.json");

PHPerf::stop();
