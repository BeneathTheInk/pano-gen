<?php
	echo($_GET['location']."<br/>");
	mkdir('Maps/'.$_GET['location'],0777);
	for($i=0;$i<360;$i+=45){
		copy('http://maps.googleapis.com/maps/api/streetview?pitch='.$_GET['pitch'].'&size=900x900&location='.$_GET['location'].'&heading='.$i.'&sensor=false&key=AIzaSyB3Af7Vy4kr15G_bIAA5zOWIjsLw2tle8E', 'Maps/'.$_GET['location'].'/map'.$i.'.jpg');
		echo('<img width="12%" src="Maps/'.$_GET['location'].'/map'.$i.'.jpg" />');
	};
?>