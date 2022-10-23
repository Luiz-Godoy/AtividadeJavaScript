<?php

namespace App\Controllers;

class MotorCarro {
	function __construct(){
		echo"
			<script>
				class MotorCarro extends IMotor {
					acelerarCarro() {
						return 'Vrum... (Veiculo acelerando)';
					}
				}
			</script>
		";
	}
}


