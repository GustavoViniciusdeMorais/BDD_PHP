Feature: Add customer
    In order to add a customer
    As an admin
    I need to be able to go to the guide

    Rules:
    - add name
    - add email

    Scenario: Admin saves customer with name and email
        Given Admin enters a name for the customer
        And Admin enters an email for the customer
        When Admin send customers data
        Then system saves the customer data