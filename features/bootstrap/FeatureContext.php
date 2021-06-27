<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\Assert as Assertions;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    
    private $customer;
    private $admin;

    public function __construct()
    {
        $this->customer = new Customer;
        $this->admin = new Admin;
    }

    /**
     * @Given Admin puts a name :arg1 and email :arg2
     */
    public function adminPutsANameAndEmail($arg1, $arg2)
    {
        $this->customer->name = $arg1;
        $this->customer->email = $arg2;
    }

    /**
     * @When Admin click to save
     */
    public function adminClickToSave()
    {
        $result = $this->admin->save();

        Assertions::assertSame(
            "clicked at save",
            $result
        );
    }

    /**
     * @Then The system saves the customer data
     */
    public function theSystemSavesTheCustomerData()
    {
        $result = $this->customer->save();

        Assertions::assertSame(
            "success",
            $result
        );
    }
}
