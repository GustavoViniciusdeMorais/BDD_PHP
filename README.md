# Behavior Driven Development

Behavior Driven Development (BDD) is an Agile software development technique that encourages collaboration between developers, testers, and non-technical stakeholders. Behat is a PHP framework for BDD, which uses human-readable Gherkin syntax to define test cases, making it easy to describe the behavior of your application.

## Simple Example

Let's say we want to test a user login feature for a website. Here's a simple example using Gherkin syntax to define a test scenario:

### Gherkin Syntax

```gherkin
Feature: User Login

  Scenario: User logs into the website
    Given I am on the login page
    When I fill in "username" with "testuser"
    And I fill in "password" with "password123"
    And I press "Login"
    Then I should see "Welcome, testuser"
```

In this example:

- **Given** describes the initial context (the user is on the login page).
- **When** describes an action the user performs (filling in the login form and pressing the login button).
- **Then** describes the expected outcome (the user should see a welcome message).
