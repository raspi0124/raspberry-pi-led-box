// this programme for when someone pass side of raspberry pi, led will light up.
// this programme is not finish.

<? php
resource fam_open ([ string $appname ] );

//Check is new image are on image folder? ( image will capture when usb camera thought that there is moving.

resource fam_monitor_directory ( resource $fam , string images )
	if ($fam = FAMCreated) {
        	file_put_contents('/sys/class/gpio/export', 25);
		file_put_contents('/sys/class/gpio/gpio25/direction', 'out');
		file_put_contents('/sys/class/gpio/gpio25/value', 1);
		echo "Led has to be lighting up now!";
	}elseif($fam = False){
    		echo "Nope,There is no moving.";
	}else {
    		echo "something wrong happen.it's might be error.";
}

	?>
