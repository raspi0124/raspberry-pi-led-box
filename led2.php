// this programme for when someone pass side of raspberry pi, led will light up.
// this programme is not finish. because this proramme need USBcamera.

<?php
define('$dirname', 'led-pictures');
define('$filename', 'led.log');
?>
<form action = led2.php method = get >
<input type = text name = fam ><br/>
<input type = submit value = 送信 >
<? php
resource fam_open ([ string $appname ] );

resource fam_monitor_directory ( resource $fam , string $dirname )
	if ($fam = FAMCreated) {
        	echo "test - fam created";
	}elseif($fam = False){
    		echo "test - an error occused";
	}else {
    		echo "something happen";
}

	?>
