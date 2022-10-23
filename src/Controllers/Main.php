<?php

namespace App\Controllers;

class Main {
	function __construct(){
		echo"
			<script>
                let car = new MotorCarro();
                console.log(car.acelerarCarro());
			</script>
		";
	}
}

