<?php

require_once "../model/mainModel.php";

$account=new main_model();

$result=$account->new_account($_POST['data']);

echo $result;

?>