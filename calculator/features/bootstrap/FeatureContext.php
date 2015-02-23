<?php

use Behat\Behat\Context\BehatContext;

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * @var Calculator
     */
    private $calculator;

    /**
     * @var integer
     */
    private $result;

    public function __construct()
    {
        $this->calculator = new MyCalculator();
    }

    /**
     * @When /^I add (\d+) and (\d+)$/
     */
    public function iAddAnd($arg1, $arg2)
    {
        $this->result = $this->calculator->doSum($arg1, $arg2);
    }

    /**
     * @Then /^I get (\d+)$/
     */
    public function iGet($arg1)
    {
        PHPUnit_Framework_Assert::assertEquals($this->result, $arg1);
    }
}
