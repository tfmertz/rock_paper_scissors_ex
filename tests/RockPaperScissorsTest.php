<?php

    require_once 'src/RockPaperScissors.php';

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        /*
        input: “Rock”, “Rock”
        output: “Tie”
        Spec: Both players choose rock, and it ends in a tie
        */
        function test_gameOutcome_rockRock()
        {
            $test_RockPaperScissors = new RockPaperScissors();
            $input = "Rock";
            $input2 = "Rock";


            $result = $test_RockPaperScissors->gameOutcome($input, $input2);


            $this->assertEquals("Tie", $result);
        }

        /*
        Input: “Scissors”, “Scissors”
        Output: Tie
        Spec: Both players play Scissors; game ends in tie.
        */
        function test_gameOutcome_scissorsScissors()
        {
            $test_RockPaperScissors = new RockPaperScissors();
            $input1 = "Scissors";
            $input2 = "Scissors";

            $result = $test_RockPaperScissors->gameOutcome($input1, $input2);

            $this->assertEquals("Tie", $result);
        }

        /*
        input: “Paper”, “Paper”
        Output: Tie
        Spec: Both players play Paper; game ends in tie.
        */
        function test_gameOutcome_paperPaper()
        {
            $test_RockPaperScissors = new RockPaperScissors();
            $input1 = "Paper";
            $input2 = "Paper";

            $result = $test_RockPaperScissors->gameOutcome($input1, $input2);

            $this->assertEquals("Tie", $result);
        }

    }

 ?>
