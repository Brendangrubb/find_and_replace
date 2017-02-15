<?php
    require_once __DIR__.'/../src/Find.php';

    class FindTest extends PHPUnit_Framework_TestCase
    {
        function test_findAndReplace_findWord()
        {
            $test_Find = new Find;
            $input1 = "I like pie";
            $input2 = "pie";
            $input3 = "pie";


            $result = $test_Find->findAndReplace($input1, $input2, $input3);

            $this->assertEquals("I like pie", $result);
        }

        function test_findAndReplace_findAndReplace()
        {
            $test_Find = new Find;
            $input1 = "I like pie";
            $input2 = "pie";
            $input3 = "cake";

            $result = $test_Find->findAndReplace($input1, $input2, $input3);

            $this->assertEquals("I like cake", $result);
        }
    }



?>
