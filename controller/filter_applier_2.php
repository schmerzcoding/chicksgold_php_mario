<?php

require_once "../model/mainModel.php";

$table_accounts=new main_model();

$result=$table_accounts->filter_apply_2($_POST['data']);

$text_result='';

foreach ($result as $r) {
    $text_result.="<tr><td style='text-align:center;'>".$r['id']."</td><td style='text-align:center;'>".$r['total']."</td><td style='text-align:center;'>".$r['payment_method']."</td><td>".$r['order_account']."</td></tr>";
}

echo $text_result;

?>