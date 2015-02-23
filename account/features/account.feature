@javascript
Feature: Manage a bank account
  IN ORDER to manage my account
  AS a logged in user
  I NEED to be able to add or remove money from my account

  Background:
    And I go to "http://localhost/Behat/account/web/"
    And I am logged in as "foo"
    And I have "50" euros

  Scenario: Check my bank account
    Then I should see "You have 50 euro on your account"

  Scenario: Add money to my account
    When I select "Add money" from "Operation"
    And I fill in "Amount" with "10"
    And I press "Go"
    Then I should see "You have 60 euro on your account"

  Scenario: Take money to my account
    When I select "Take money" from "Operation"
    And I fill in "Amount" with "10"
    And I press "Go"
    Then I should see "You have 40 euro on your account"

  Scenario: Logout
    When I follow "logout"
    Then I should see "Login"
    And I should see "My name"