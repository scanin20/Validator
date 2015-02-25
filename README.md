# Validator
Simple class string validator using regex.

# Why you might need it
The idea of creating a simple class that validate input comes to me after an episode. <br>
Every time I have to check if a value is integer or float or date I use the native function is_numeric() but it validate "1e12", 
if I want to fix this I have to check the string with a RegEx, so everytime I have to declare the regex and use preg_match().
So I created a class that help me to validate string with RegEx.

# License
This software is licenced under the <a href="http://www.gnu.org/licenses/lgpl-2.1.html">LGPL 2.1</a>. Please read LICENSE for information on the software availability and distribution.

# Installation
The installation is very simple, you have only to include the class in your file using <code>require path/to/class.validator.php</code>, and the class is ready for use!

# Example

<pre>
require 'class.validator.php';<br>

$validator = new Validator();
$date = <span style='color:blue'>"29/02/2012"</span>;

if ($validator->isDate($date)) {
  echo "$date is a valid date";
} else {
  echo "$date is not a valid date";
}
</pre>

The output will be: <br>
<code>29/02/2012 is a valid date</code>

But if you pass a non date:<br>
<pre>
require 'class.validator.php';

$validator = new Validator();
$date = <span style='color:blue'>"29/02/2013"</span>;

if ($validator->isDate($date)) {
  echo "$date is a valid date";
} else {
  echo "$date is not a valid date";
}
</pre>

The output will be: <br>
<code>29/02/2013 is not a valid date</code>

# Documentation

See the class for it.

# Report, question or suggestion

If you have any problem, question, suggestion send an email to author. 
If you find a bug, please report to author.

Thanks you!
