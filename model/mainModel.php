<?php
require_once 'connect.php';

class main_model{

    private $conexion;
	public function __construct(){
        $this->conexion=new database();
    }    

public function show_rows(){
    $this->conexion->getConnection();
    $rows=[];
    $select=$this->conexion->query('SELECT * FROM accounts ORDER BY id ASC');

    foreach($select->fetchAll() as $account){
        $rows[]=$account;
    }
    return $rows;
}
public function show_orders(){
    $this->conexion->getConnection();
    $rows=[];
    $select=$this->conexion->query('SELECT * FROM orders ORDER BY id ASC');

    foreach($select->fetchAll() as $account){
        $rows[]=$account;
    }
    return $rows;
}

public function new_account($account_info){

    $category=$account_info['category'];
    $title=$account_info['title'];
    $price=$account_info['price'];
    $description=$account_info['description'];
    $status=$account_info['status'];

    $db=new database();
    $db->getConnection();

    try{
        $result = $db->query("INSERT INTO accounts (category, title, price, description, status) VALUES ('$category', '$title', '$price', '$description', '$status')");
        return true;
    }
    catch(PDOException $e){
        return $e;
    }

}

public function edit_account($account_info){
    
    $category=$account_info['category'];
    $title=$account_info['title'];
    $price=$account_info['price'];
    $description=$account_info['description'];
    $status=$account_info['status'];
    $id=$account_info['id'];

    $db=new database();
    $db->getConnection();

    try{
        $result = $db->query("UPDATE accounts SET category='$category', title='$title', price='$price', description='$description', status='$status' WHERE id='$id' ");
        return true;
    }
    catch(PDOException $e){
        return $e;
    }

}

public function delete_account($account_id){
    $db=new database();
    $db->getConnection();

    try{
        $result = $db->query("DELETE FROM accounts WHERE id='$account_id'");
        return true;
    }
    catch(PDOException $e){
        return $e;
    }
}

public function purchase_account($order_info){
    $total=$order_info['price'];
    $payment_method=$order_info['payment_method'];
    $order_account=$order_info['id'];


    $db=new database();
    $db->getConnection();

    try{
        $result = $db->query("INSERT INTO orders (total, payment_method, order_account) VALUES ('$total', '$payment_method', '$order_account')");
        return true;
    }
    catch(PDOException $e){
        return $e;
    }

}
public function filter_apply($info){

    switch($info['price']){
        case "opt1":
            $info['price']="<500";
            break;
            case "opt2":
                $info['price']="<1000";
                break;
                case "opt3":
                    $info['price']=">=1000";
                    break;
    }

    $query="SELECT * FROM accounts ";

    if($info['status']!="empty"){
        $query.="WHERE status='".$info['status']."' ";
    }

    if($info['price']!='empty'){
        if($info['status']!="empty"){
            $query.="AND price ".$info['price']." ";
        }
        else{
            
            $query.="WHERE price ".$info['price']." ";
        }
    }


    if($info['text']!='' || $info['text']!=null){
        if($info['status']!='empty' || $info['price']!='empty'){
            $query.="AND (category LIKE '%".$info['text']."%' OR title LIKE '%".$info['text']."%' OR description LIKE '%".$info['text']."%')";
        }
        else{
            $query.="WHERE category LIKE '%".$info['text']."%' OR title LIKE '%".$info['text']."%' OR description LIKE '%".$info['text']."%'";
        }
    }

    $query.=" ORDER BY id ASC";

    $db=new database();
    $db->getConnection();
    $rows=[];
    $select=$db->query($query);

    foreach($select->fetchAll() as $account){
        $rows[]=$account;
    }
    return $rows;

}
public function filter_apply_2($info){

    $query="SELECT * FROM orders ";

    if($info['total']!="empty"){
        switch ($info['total']){
            case 'opt1':
                $info['total']='<500';
            break;
            case 'opt2':
                $info['total']='<1000';
            break;
            case 'opt3':
                $info['total']='>=1000';
                break;
            
        }
        $query.="WHERE total ".$info['total']." ";
    }



    if($info['text']!='' || $info['text']!=null){
        
        if($info['total']!='empty'){

            if(is_numeric($info['text'])){
            $query.="AND (order_account = ".$info['text'].")";
        }
        else{
            $query.="AND (payment_method LIKE '%".$info['text']."%') ";
        }
        }
        else{

            if(is_numeric($info['text'])){
            $query.="WHERE  order_account = ".$info['text']." ";
        }
        else{
        $query.="WHERE 	payment_method LIKE '%".$info['text']."%' ";
        }
        }
    }

    $query.=" ORDER BY id ASC";

    $db=new database();
    $db->getConnection();
    $rows=[];
    $select=$db->query($query);

    foreach($select->fetchAll() as $account){
        $rows[]=$account;
    }
    return $rows;

}

}
?>