Feature: ls
  IN ORDER to see the directory structure
  AS a uix user
  I NEED to be able to list the current directory's structure

  Scenario: List 2 files in a directory
    Given I am in a directory "test"
    And I have a file named "foo"
    And I have a file named "bar"
    When I run "ls"
    Then I should get:
    """
    bar
    foo
    """