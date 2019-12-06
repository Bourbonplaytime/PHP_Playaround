<?php

$name = 'Mike';

$greet = function() use ($name) {
    echo "Hello there, $name.";
};

$greet();

?>