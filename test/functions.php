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
  
    public function testCreateTableFailure()
    {
        //expected result of the test
        $expected = 'There is no data for this database'; 
        //input for the test to get the result
        $testInput1 = [];
        //run the real function with the input
        $case = createTable($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testCreateTableMalform()
    {
        //expected result of the test
        $expected = 'There is no data for this database'; 
        //input for the test to get the result
        $testInput1 = 25;
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = createTable($testInput1);
    }

    public function testStrLengthSuccess()
    {
        //expected result of the test
        $expected = true;
        //input for the test to get the result
        $testInput1 = 'hello';
        //run the real function with the input
        $case = strLength($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testStrLengthFailure()
    {
        //expected result of the test
        $expected = false;
        //input for the test to get the result
        $testInput1 = '';
        //run the real function with the input
        $case = strLength($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testStrLengthMalform()
    {
        //expected result of the test
        $expected = false; 
        //input for the test to get the result
        $testInput1 = [23, 23, 56];
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = StrLength($testInput1);
    }

    public function testIntLengthSuccess()
    {
        //expected result of the test
        $expected = true;
        //input for the test to get the result
        $testInput1 = 456789;
        //run the real function with the input
        $case = intLength($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testIntLengthFailure()
    {
        //expected result of the test
        $expected = false;
        //input for the test to get the result
        $testInput1 = -21;
        //run the real function with the input
        $case = intLength($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testIntLengthMalform()
    {
        //expected result of the test
        $expected = false; 
        //input for the test to get the result
        $testInput1 = [23, 23, 56];
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = StrLength($testInput1);
    }
}