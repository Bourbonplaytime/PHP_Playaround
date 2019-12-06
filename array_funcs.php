<?php

$names = array(
    "Jim" => "Jam Master", 
    "Joey" => "Janitor", 
    "Janis" => "Jumbalaya Maker"
);

function print_info($value, $key) {
    echo "$key is a $value\n";
}

foreach(array_keys($names) as $name) {
    echo "Hello, $name\n";
    print_info($names[$name], $name);
};

?>