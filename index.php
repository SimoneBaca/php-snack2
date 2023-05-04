
Name: <input type="text" name="name" value="<?php echo $name;?>">

Email: <input type="text" name="email" value="<?php echo $email;?>">

Age: <input type="text" name="age" value="<?php echo $website;?>">

<?php

if((strlen($name) > 3) && (is_numeric($age)) && (str_contains($email,'.')) && (str_contains($email,'@'))){
    echo 'accesso consentito';
}else{
    echo 'accesso negato';
}

?>