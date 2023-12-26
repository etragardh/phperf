# phperf
Measure performance of php scripts

### Installation
'''
gh repo clone etragardh/phperf
cp phperf/class-phperf.php /path/to/project/src/
'''
Require the class in your code
'''
require_once( '/path/to/class-phperf.php' );
'''

### How to use

Start time and memory tracking just above your code that needs to be tracked.
'''
PHPerf::start();
'''

Stop and print the results
'''
PHPerf::stop();
'''

Take a look in the sample.php
