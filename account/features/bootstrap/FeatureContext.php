<?php

require_once __DIR__ . '/../../library/Account.php';

use Behat\MinkExtension\Context\MinkContext;

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * @Given /^I am logged in as "([^"]*)"$/
     */
    public function iAmLoggedInAs($username)
    {
        $this->fillField('My name', $username);
        $this->pressButton('Login');
    }

    /**
     * @Given /^I have "([^"]*)" euros$/
     */
    public function iHaveEuros($balance)
    {
        $this->fillField('New balance', $balance);
        $this->pressButton('Reset');
    }
}