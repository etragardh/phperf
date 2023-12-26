# phperf
Measure performance of php scripts

## Demo output
```
##############################################
# Time		97.73625 ms
# Max Memory	48.6304 mb
```

### Installation
```
gh repo clone etragardh/phperf
cp phperf/class-phperf.php /path/to/project/src/
```
Require the class in your code
```
require_once( '/path/to/class-phperf.php' );
```

### How to use

Start time and memory tracking just above your code that needs to be tracked.
```
PHPerf::start();
```

Stop and print the results
```
PHPerf::stop();
```

Take a look in the example.php


### Example

Run the example from terminal
```
cd phperf/example
php example.php
```

Or write your own test
```
<?php
require_once( '/path/to/class-phperf.php' );
PHPerf::start();
for ( $i=0; $i<=1000; $i++) {
    echo "Iteration: " . $i . "\r\n";
}
PHPerf::stop();
?>
```
