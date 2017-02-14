<?php

    // class RockPaperScissors
    // {
    //     function playRockPaperScissors($player1_input, $player2_input)
    //     {
    //         if ($player1_input === $player2_input) {
    //             return "draw";
    //         }else if ($player1_input == "scissors" && $player2_input == "paper") {
    //             return "Player 1";
    //         }else if ($player1_input == "rock" && $player2_input == "scissors") {
    //             return "Player 1";
    //         }
    //     }
    // }

    class RockPaperScissors
    {
        private $result;

        function __construct()
        {
        }

        function playRockPaperScissors($player1_input, $player2_input)
        {
            $plays = array($player1_input,$player2_input);

            // find which play won
            if ($player1_input == $player2_input)
            {
                return "draw";
            } else if (  in_array("rock",$plays) && in_array("scissors",$plays)  )
            {
                $win = "rock";
            } else if (  in_array("rock",$plays) && in_array("paper",$plays)  )
            {
                $win = "paper";
            }else if (  in_array("paper",$plays) && in_array("scissors",$plays)  )
            {
                $win = "scissors";
            }

            // find which player made the play
            if ($win == $player1_input)
            {
                return "Player 1";
            } else
            {
                return "Player 2";
            }
        }

        function setResult($result)
        {
            $this->result = $result;
        }
        function getResult()
        {
            return $this->result;
        }

        function saveResult()
        {
            $_SESSION['result'] = $this;

        }

        static function getGlobalResult()
        {
            return $_SESSION['result'];
        }

        static function deletetGlobalResult()
        {
            $_SESSION['result'] = new RockPaperScissors;
        }

    }

?>
