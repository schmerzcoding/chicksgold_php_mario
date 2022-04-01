<?php

require_once "../model/mainModel.php";

$table_accounts=new main_model();

$result=$table_accounts->filter_apply($_POST['data']);

$text_result='';

foreach ($result as $r) {
    $text_result.="<tr><td style='text-align:center;'>".$r['id']."</td><td style='text-align:center;'>".$r['category']."</td><td style='text-align:center;'>".$r['title']."</td><td style='text-align:center;'>".$r['price']."</td><td style='text-align:center;'>".$r['description']."</td><td style='text-align:center;'>".$r['status']."</td><td style='text-align:center;'>
    <button class='w3-button' style='border:solid 1px black; border-radius:5px; margin-left:3px;'; onclick='modify_account(".json_encode($r).")'>Modify</button><button class='w3-button' style='border:solid 1px black; border-radius:5px; margin-left:3px;'; onclick='delete_account(`".$r['id']."`)'>Delete</button><button class='w3-button' style='border:solid 1px black; border-radius:5px; margin-left:3px;'; onclick='purchase_account(".json_encode($r).")'>Purchase</button></td></tr>";
}

echo $text_result;

?>