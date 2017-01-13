// this programme for when someone pass side of raspberry pi, led will light up.
<?php
file_put_contents('/sys/class/gpio/export', 25);
file_put_contents('/sys/class/gpio/gpio25/direction', 'out');
file_put_contents('/sys/class/gpio/gpio25/value', 1);
?>
