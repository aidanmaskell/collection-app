<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase {
    public function testCreateTableSuccess()
    {
        //expected result of the test
        $expected = '<tr><td>Name</td><td>Country of Origin</td><td>Scoville Heat Units</td></tr>' .
                    '<tr>' .  
                    '<td>' . 'chilli' . '</td>' .
                    '<td>' . 'brazil' . '</td>' .
                    '<td>' . '100' . '</td>' .
                    '</tr>';
        //input for the test to get the result
        $testInput1 = [['name' => 'chilli', 'origin' => 'brazil', 'shu' => '100']];
        //run the real function with the input
        $case = createTable($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }
}  
    // public function testCheckAnswerFailure()
    // {
    //     //expected result of the test
    //     $expected = 0;
    //     //input for the test to get the result
    //     $testInput1 = 'none';
    //     $testInput2 = 'banana';
    //     //run the real function with the input
    //     $case = checkAnswer($testInput1, $testInput2);
    //     //compare the expected result with the actual result
    //     $this->assertEquals($expected, $case);
    // }

    // public function testCheckAnswerMalform()
    // {
    //     //expected result of the test
    //     $expected = 0;
    //     //input for the test to get the result
    //     $testInput1 = ['dry' => 10, 'grass' => 0];
    //     $testInput2 = 'apple';
    //     // tell phpunit it should expect an error to be thrown
    //     $this->expectException(TypeError::class);
    //     //run the real function with the input
    //     $case = checkAnswer($testInput1, $testInput2);
    // }