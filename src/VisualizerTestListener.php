<?php

namespace ShoppingKart;

use PHPUnit\Framework\TestListener;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Framework\Warning;

class VisualizerTestListener implements TestListener
{

    public function endTest(Test $test, $time)
    {
        echo "<h2>{$test->getName()}</h2>";
    }

    public function addError(Test $test, \Exception $e, $time)
    {
    }

    public function addWarning(Test $test, Warning $e, $time)
    {
    }

    public function addFailure(Test $test, AssertionFailedError $e, $time)
    {
    }

    public function addIncompleteTest(Test $test, \Exception $e, $time)
    {
    }

    public function addRiskyTest(Test $test, \Exception $e, $time)
    {
    }

    public function addSkippedTest(Test $test, \Exception $e, $time)
    {
    }

    public function startTest(Test $test)
    {
    }

    public function startTestSuite(TestSuite $suite)
    {
    }

    public function endTestSuite(TestSuite $suite)
    {
    }
}
