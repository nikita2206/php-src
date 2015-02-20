--TEST--
Positional arguments can be used after argument unpacking
--FILE--
<?php

var_dump(...[1, 2, 3], 4, ...[4, 6], 1, 0);

?>
--EXPECT--
int(1)
int(2)
int(3)
int(4)
int(4)
int(6)
int(1)
int(0)
