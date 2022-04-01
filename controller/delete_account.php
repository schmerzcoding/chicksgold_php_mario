<?php
require_once "../model/mainModel.php";

$table_accounts=new main_model();

$result=$table_accounts->delete_account($_POST['id']);

echo $result;

?>
