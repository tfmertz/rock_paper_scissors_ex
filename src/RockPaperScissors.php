<?php

	class RockPaperScissors
	{
		function gameOutcome($player1, $player2)
		{
			$picks = array(strtolower($player1), strtolower($player2));
			if ($picks[0] == $picks[1]) {
				return 'Tie';
			}
			if(in_array("rock", $picks) && in_array("paper", $picks)) {
				$string = "Player " . (array_search("paper", $picks) + 1);
				return $string;
			} else if (in_array("rock", $picks) && in_array("scissors", $picks)) {
				$string = "Player " . (array_search("rock", $picks) + 1);
				return $string;
			} else {
				$string = "Player " . (array_search("scissors", $picks) + 1);
				return $string;
			}
		}

		function getComputerPick() {
			$choices = ["Rock", "Paper", "Scissors"];
			return $choices[rand(0,2)];
		}
	}
?>
