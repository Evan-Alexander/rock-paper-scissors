<?php

    require_once "src/Rock_paper_scissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_Draw()
        {
            // Arrange
            $test_Round1 = new RockPaperScissors;

            $player1_input = "rock";
            $player2_input = "rock";

            //Act
            $result = $test_Round1->playRockPaperScissors($player1_input, $player2_input);

            //assert
            $this->assertEquals("draw",$result);
        }

        function test_ScissorsW()
        {
            // Arrange
            $test_Round1 = new RockPaperScissors;

            $player1_input = "scissors";
            $player2_input = "paper";

            //Act
            $result = $test_Round1->playRockPaperScissors($player1_input, $player2_input);

            //assert
            $this->assertEquals("Player 1",$result);
        }

        function test_RockW()
        {
            // Arrange
            $test_Round1 = new RockPaperScissors;

            $player1_input = "rock";
            $player2_input = "scissors";

            //Act
            $result = $test_Round1->playRockPaperScissors($player1_input, $player2_input);

            //assert
            $this->assertEquals("Player 1",$result);
        }

        function test_PaperW()
        {
            // Arrange
            $test_Round1 = new RockPaperScissors;

            $player1_input = "rock";
            $player2_input = "paper";

            //Act
            $result = $test_Round1->playRockPaperScissors($player1_input, $player2_input);

            //assert
            $this->assertEquals("Player 2",$result);
        }
    }
?>
