<?php 
require_once "../model/mainModel.php";

$modelo= new main_model();

$tabla=$modelo->show_orders();

$text="";

foreach($tabla as $t){
    $contador=
    $text.="<tr><td style=text-align:center;>".$t['id']."</td><td style=text-align:center;>".$t['total']."</td><td style=text-align:center;>".$t['payment_method']."</td>
    <td style=text-align:center;>".$t['order_account']."</td></tr>";    
    
}
echo $text;
    ?>