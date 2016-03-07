<?php

	class Adder  
	{
		
		public function run($number, $result) {
			return $result + $number;
		}
	}


	class Subtractor 
	{
		public function run($number, $result) {
			return $result - $number;
		}
	}

	class Multiplier 
	{
		public function run($number, $result) {
			return $result * $number;
		}
	}
	
	class Divider 
	{
		public function run($number, $result) {
			return $result / $number;
		}
	}