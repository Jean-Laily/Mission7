<?php

   session_unset();
   session_destroy();
   header("location:index.php?act=ac"); // reste à redefinir

?>