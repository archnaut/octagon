#!/bin/bash

PHP=`which php`

(trap 'kill 0' SIGINT; php -S localhost:8000 -t src/ & sensible-browser http://localhost:8000/Units.php)