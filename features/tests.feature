Feature: Add customer

    Scenario: Admin saves customer
        Given Admin puts a name "name" and email "email"
        When Admin click to save
        Then The system saves the customer data