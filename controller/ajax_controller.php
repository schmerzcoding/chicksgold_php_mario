<?php 
require_once "../model/mainModel.php";

$modelo= new main_model();

$table=$modelo->show_rows();

$text="";

foreach($table as $accounts){
    $text.="<tr><td style=text-align:center;>".$accounts['id']."</td><td style=text-align:center;>".$accounts['category']."</td><td style=text-align:center;>".$accounts['title']."</td>
    <td style=text-align:center;>".$accounts['price']."</td><td style=text-align:center;>".$accounts['description']."</td><td style=text-align:center;>".$accounts['status']."</td>
    <td style=text-align:center;><button class='w3-button' style='border: solid 1px black; border-radius:5px; margin-left:3px;' onclick='modify_account(".json_encode($accounts).")'>Modify</button><button class='w3-button' style='border: solid 1px black; border-radius:5px; margin-left:3px;' onclick='delete_account(`".$accounts['id']."`)'>Delete</button><button class='w3-button' style='border: solid 1px black; border-radius:5px; margin-left:3px;' onclick='purchase_account(".json_encode($accounts).")'>Purchase</button></td></tr></tr>";

}
echo $text;




?>