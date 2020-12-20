<?php
//如果表單送出後印出祝賀詞
if ($_POST['user']) {
    print "Hello, ";
    //印出被送出表單中'user'的欄位的值
    print $_POST['user'];
    print "!";
} else {
    //不然的話，就顯示表單
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
    Your Name: <input type="text" name="user" />
    <br/>
    <input type="submit" value="Say Hello">
</form>
_HTML_;
}
?>