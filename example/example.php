<?php

require_once( '../class-phperf.php' );

PHPerf::start();

for ( $i=0; $i<=10; $i++ ) {
  echo "Hello ({$i})\r\n";
}
$file_contents = file_get_contents("large-file.json");
unset( $file_contents );

PHPerf::stop();


PHPerf::start( 'sha256' );
$sha256 = hash( "sha256", "test" );
unset( $sha256 );
PHPerf::stop();

PHPerf::start( 'md5' );
$md5 = md5( "test" );
unset( $md5 );
PHPerf::stop();
