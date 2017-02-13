<?php

    class RockPaperScissors
    {
        function playRockPaperScissors($player1_input, $player2_input)
        {
            if ($player1_input === $player2_input) {
                return "draw";
            }else if ($player1_input == "scissors" && $player2_input == "paper") {
                return "Player 1";
            }else if ($player1_input == "rock" && $player2_input == "scissors") {
                return "Player 1";
            }
        }
    }



?>
