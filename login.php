<?php

include_once ('global.php');

if(isset($_POST['myusername']) && isset($_POST['mypassword'])) {
    $myusername = $_POST['myusername'];
    $mypassword = $_POST['mypassword'];

    $sql = 'SELECT * FROM members WHERE username=\'' . $myusername . '\' and password=\''. $mypassword . '\'' ;
    $result = loadRow($sql);
}
if(isset($result)){
    echo 'yes';
} else {
    echo 'no';
}

?>

<!DOCTYPE html>
<html>
<?php include_once('header.php'); ?>
<body>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
        <form name="form1" method="post" action="">
            <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                        <td colspan="3"><strong>Member Login</strong></td>
                    </tr>
                    <tr>
                        <td width="78">Username</td>
                        <td width="6">:</td>
                        <td width="294"><input name="myusername" type="text" id="myusername"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input name="mypassword" type="text" id="mypassword"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Login"></td>
                    </tr>
                </table>
            </td>
        </form>
    </tr>
</table>
</body>
</html>