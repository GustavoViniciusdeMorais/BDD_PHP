<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given Admin puts a name :arg1 and email :arg2
     */
    public function adminPutsANameAndEmail($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When Admin click to save
     */
    public function adminClickToSave()
    {
        throw new PendingException();
    }

    /**
     * @Then The system saves the customer data
     */
    public function theSystemSavesTheCustomerData()
    {
        throw new PendingException();
    }
}
