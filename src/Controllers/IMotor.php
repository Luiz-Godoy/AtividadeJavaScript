<?php

namespace App\Controllers;

class IMotor {
	function __construct(){
		echo"
			<script>
				class IMotor {

					constructor (motor) {
						this.motor = motor;
					}
				
					acelerarCarro() {
						return this.motor
					}
				}
			</script>
		";
	}
}

