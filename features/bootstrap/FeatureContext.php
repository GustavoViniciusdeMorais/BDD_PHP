<?php

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
     * @Given Admin enters a name for the customer
     */
    public function adminEntersANameForTheCustomer()
    {
        throw new PendingException();
    }

    /**
     * @Given Admin enters an email for the customer
     */
    public function adminEntersAnEmailForTheCustomer()
    {
        throw new PendingException();
    }

    /**
     * @When Admin send customers data
     */
    public function adminSendCustomersData()
    {
        throw new PendingException();
    }

    /**
     * @Then system saves the customer data
     */
    public function systemSavesTheCustomerData()
    {
        throw new PendingException();
    }
}
