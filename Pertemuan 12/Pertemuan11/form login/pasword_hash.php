<?php
   $pw_hash = password_hash("123456", PASSWORD_DEFAULT);

   echo $pw_hash;
   echo "<br>";
?>