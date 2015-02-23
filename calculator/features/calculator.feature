Feature: Perform sum on integer
  In order to perform a sum
  As a developer
  I need to implement an sum calculator

  Scenario Outline: perform sum
    When I add <a> and <b>
    Then I get <c>

  Examples:
    | a | b | c |
    | 1 | 2 | 3 |
    | 2 | 1 | 3 |