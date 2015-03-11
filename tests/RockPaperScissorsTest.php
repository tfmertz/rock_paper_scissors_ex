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
        Output: "Tie"
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
        Output: "Tie"
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

        /*
        input: “Rock”, “Paper”
        output: “Player 2”
        Spec: One player chooses Rock, another chooses Paper, player 2 wins
        */
        function test_gameOutcome_rockPaper()
        {
            $test_RockPaperScissors = new RockPaperScissors();
            $input1 = "Rock";
            $input2 = "Paper";

            $result = $test_RockPaperScissors->gameOutcome($input1, $input2);

            $this->assertEquals("Player 2", $result);
        }

        /*
        input: “Paper”, “Rock”
        output: “Player 1"
        Spec: One player chooses Paper, another chooses Rock, player 1 wins
        */

        function test_gameOutcome_paperRock()
        {
            $test_RockPaperScissors = new RockPaperScissors();
            $input1 = "Paper";
            $input2 = "Rock";

            $result = $test_RockPaperScissors->gameOutcome($input1, $input2);

            $this->assertEquals("Player 1", $result);
        }

        /*
        input: “Rock”, “Scissors”
        output: “Player 1”
        Spec: One player plays ROCK, other plays Scissors; Player 1 wins.
        */
        function test_gameOutcome_rockScissors()
        {
            $test_RockPaperScissors = new RockPaperScissors();
            $input1 = "Rock";
            $input2 = "Scissors";

            $result = $test_RockPaperScissors->gameOutcome($input1, $input2);

            $this->assertEquals("Player 1", $result);
        }

        /*
        input: “Scissors”, “Rock”
        output: “Player 2”
        Spec: One player plays Scissors, other plays Rock; Player 2 wins.
        */

        function test_gameOutcome_scissorsRock()
        {
            $test_RockPaperScissors = new RockPaperScissors();
            $input1 = "Scissors";
            $input2 = "Rock";

            $result = $test_RockPaperScissors->gameOutcome($input1, $input2);

            $this->assertEquals("Player 2", $result);
        }

        /*
        input: “ROcK”, “sciSsOrs”
        Output: “Player 1”
        Spec: players enter letters in a mix of upcase and downcase, return the correct winner
        */
        function test_gameOutcome_upcase()
        {
            $test_RockPaperScissors = new RockPaperScissors();
            $input1 = "ROcK";
            $input2 = "sciSsOrs";

            $result = $test_RockPaperScissors->gameOutcome($input1, $input2);

            $this->assertEquals("Player 1", $result);
        }


    }

 ?>
