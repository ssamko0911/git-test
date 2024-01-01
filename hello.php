<?php
echo "Default Syntax";
?>
View the example (with default tag syntax) in the browser.

Short open Tags

The short tags starts with "<?" and ends with "?>". Short style tags are only available when they are enabled in php.ini configuration file on servers.

Example:

<?
echo "PHP example with short-tags";
?>
Omit the PHP closing tag at the end of the file

It is recommended that a closing PHP tag shall be omitted in a file containing only PHP code so that occurrences of accidental whitespace or new lines being added after the PHP closing tag, which may start output buffering causing uncalled for effects can be avoided.

Example:

<?php
echo "PHP example with short-tags";
PHP Statement separation

In PHP, statements are terminated by a semicolon (;) like C or Perl. The closing tag of a block of PHP code automatically implies a semicolon, there is no need to have a semicolon terminating the last line of a PHP block.

Rules for statement separation

a semicolon
AND/OR
a closing PHP tag
Valid Codes

<?php
echo 'This is a test string';
?>
In the above example, both semicolon(;) and a closing PHP tag are present.

<?php echo 'This is a test' ?>
In the above example, there is no semicolon(;) after the last instruction but a closing PHP tag is present.
<?php echo 'Here the last closing tag is omitted' ;
In the above example, there is a semicolon(;) in the last instruction but there is no closing PHP tag.

PHP Case sensitivity

In PHP the user defined functions, classes, core language keywords (for example if, else, while, echo etc.) are case-insensitive. Therefore the three echo statements in the following example are equal.

Example - 1

<?php
echo("We are learning PHP case sensitivity <br />"); 
ECHO("We are learning PHP case sensitivity <br />");
EcHo("We are learning PHP case sensitivity <br />");
?>
Output:

 We are learning PHP case sensitivity
We are learning PHP case sensitivity 
We are learning PHP case sensitivity 
View the example in the browser

On the other hand, all variables are case-sensitive.

Consider the following example. Only the first statement display the value as $amount because $amount, $AMOUNT, $amoUNT are three different variables.

Example - 2

<?php
$amount = 200;
echo("The Amount is : $amount <br />"); 
echo("The Amount is : $AMOUNT <br />");
echo("The Amount is : $amoUNT <br />");
?>
Output:

The Amount is : 200 
The Amount is :
The Amount is :
View the example in the browser

PHP whitespace insensitivity

In general, whitespace is not visible on the screen, including spaces, tabs, and end-of-line characters i.e. carriage returns. In PHP whitespace doesn't matter in coding. You can break a single line statement to any number of lines or number of separate statements together on a single line.

The following two examples are same :

Example:

<?php
function student_info($student_name, $class, $roll_no)
{
echo "The Name of student is : $student_name <br />";
echo "His Class is : $class and Roll No. is $roll_no"; 
}
student_info("David Rayy", "V", 12)
?>
Output:

The Name of student is : David Rayy 
  His Class is : V and Roll No. is 12 
View the example in the browser

Example: Advance whitespace insensitivity

<?php
function student_info
(
$student_name,
$class,
$roll_no
)
{
echo "The Name of student is : $student_name <br />";
echo "His Class is : $class and Roll No. is $roll_no";
}
student_info(
"David Rayy", "V", 12
)
?>
Output:

 The Name of student is : David Rayy 
  His Class is : V and Roll No. is 12 
View the example in the browser

Example : Whitespace insensitivity with tabs and spaces

In the following example spaces and tabs are used in a numeric operation, but in both cases, $xyz returns the same value.

<?php
// single space between $xyz, =, 11, +, 12
$xyz = 11 + 12;
echo $xyz.'<br />';
// tabs and spaces
$xyz =	 11	 +	 12;
echo $xyz;
?>
Output:

 23
  23 
View the example in the browser

PHP: Single line and Multiple lines Comments

Single line comment

PHP supports the following two different way of commenting.

# This is a single line comment.

//This is another way of single line comment.

Example:

<?php
echo "How to make single line comment.";
# This is a single line comment.
//This is another way of single line comment.
?>
Output:

 How to make single line comment.
View the example in the browser

Multiple lines comments

PHP supports 'C', style comments. A comment starts with the character pair /* and terminates with the character pair */.

/* This is a multiple comment testing,
and these lines will be ignored
at the time of execution */

Example:

<?php
echo "How to make multiline comments";
/* These are  a multiline comments
testing, and these lines will ignored
at the time of execution */
?>
Output:

 How to make multiline comments
View the example in the browser

Multiple lines comments can not be nested

<?php
echo "How to make multiline comments";
  /* This is a multiline comment
       testing and these lines will be ignored
at the time of execution  */
echo "Following multiline comments formats are wrong.";
  /* This is a multiline comment /*
       testing and these lines will be ignored */
at the time of execution  */
?>
First PHP Script

Here is the first PHP script which will display "Hello World..." in the web browser.

<?php
echo "Hello World...";
?>
The tags tell the web server to treat everything inside the tags as PHP code to run. The code is very simple. It uses an in-build PHP function "echo" to display the text "Hello World ..." in the web page. Everything outside these tags is sent directly to the browser.

Pictorial presentation

Pictorial representation of First PHP Page
Combining PHP and HTML

PHP syntax is applicable only within PHP tags.

PHP can be embedded in HTML and placed anywhere in the document.

When PHP is embedded in HTML documents and PHP parses this document it interpreted the section enclosed with an opening tag (<?php) and closing tag (?>) of PHP and ignore the rest parts of the document.

PHP and HTML are seen together in the following example.

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> PHP Page</title>
</head>
<body>
<?php
echo "Hello World...";
echo "Hello World..."; 
?> 
</body>
</html>
Practice here online :


Previous: Install WAMP
Next: PHP Variables

﻿
Follow us on Facebook and Twitter for latest update.

Weekly Trends
SQL Tutorial
SQL Inner Join
Python Exercises, Practice, Solution
Python Interview Questions and Answers: Comprehensive Guide
Scala Exercises, Practice, Solution
Kotlin Exercises practice with solution
MongoDB Exercises, Practice, Solution
SQL Exercises, Practice, Solution - JOINS
Java Basic Programming Exercises
SQL Subqueries
C# Sharp Basic Exercises
SQL COUNT() with distinct
JavaScript HTML Form Validation
Java Collection Exercises
SQL COUNT() function




This work is licensed under a Creative Commons Attribution 4.0 International License.
©w3resource.com 2011-2023
PrivacyAboutContactFeedbackAdvertise
