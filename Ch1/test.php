<?php
// Print a greeting if the form was submitted in the script "printform.php"
if ($_POST['user']) {
    print "Hello, ";
   //Print what was submitted in the form "printform.php" in the parameter called 'user'
   print $_POST['user'];
   print "!";
} else {
   // Otherwise, print the form
   print <<<_HTML_
    <form method="post" action="$_SERVER[PHP_SELF]">
        Your NAme: <input type="text" name="user">
        <br/>
        <input type="submit" value="Say Hello">
    </form>
    _HTML_;
    }
?>