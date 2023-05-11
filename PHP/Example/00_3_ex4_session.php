<?

session_name("kim");
session_start();

var_dump($_SESSION);
var_dump($_COOKIE);
var_dump("세션ID : ".session_id());
var_dump("세션ID : ".session_id());

// C:\Apache24\htdocs\00_3_ex4_session.php:5:
// array (size=1)
//   'id' => string 'php506' (length=6)
// C:\Apache24\htdocs\00_3_ex4_session.php:6:
// array (size=1)
//   'PHPSESSID' => string 'o8lm8t5p7t86t19af529hgqrb3' (length=26)
// C:\Apache24\htdocs\00_3_ex4_session.php:7:string '세션ID : o8lm8t5p7t86t19af529hgqrb3' (length=37)