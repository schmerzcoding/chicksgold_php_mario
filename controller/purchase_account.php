<?php

require_once "../model/mainModel.php";

$table_accounts=new main_model();

$result=$table_accounts->purchase_account($_POST['data']);

echo $result;

?>