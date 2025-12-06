<?php 
$districts = array(1=>["marsingid"," narayanjong"], 2=>["comilla", "noakhali"]);

$id = $_POST['id'];
$lists = ($districts[$id]);
foreach($lists as $list){
    echo "<option>".$list."</option>";
}
?>