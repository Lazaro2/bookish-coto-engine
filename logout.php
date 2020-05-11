<?php
     session_start();
//   session_unset();pode ser esta forma ou a de baixo
     unset($_session['id_usuario']);
     session_destroy();
     header("Location: index.php");
//(T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN)
    ${ T_CURLY_OPEN() 
}
?>