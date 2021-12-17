<?php

    namespace TDD\Test;

    require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

    use PHPUnit\Framework\TestCase;
    use TDD\KerstBorrel;

    class KerstBorrelTest extends TestCase
    {
        public $kerstBorrel;

        public $assert;

        public function setUp()
        {
            $this->kerstBorrel = new KerstBorrel();
        }

        public function tearDown()
        {
            unset($this->kerstBorrel);
        }

        /**
         * @dataProvider provideKerstborrel
         */

        public function testKostenKerstpakket($input0, $input1, $expected)
        {
            $output = $this->kerstBorrel->kostenKerstpakket($input0, $input1);
            $msg = 'uitkomsten verwacht ' . $expected . 'waarde ';
            $this->assertEquals($expected, $output, $msg);
        }

        public function provideKerstborrel()
        {
            return [
                [21, 5000, 221.0],
                [10, 1000, 83.0],
                [30, 2000, 50.0],
                [10, 1300, 113.0],
                [23, 200, -9.0],
                [11, 2000, 164.0],
                [30, 2000, 50.0],
                [10, 1000, 83.0],
            ];
        }
    }

?>