<?php
class userfunctionality{


public function __construct(){
		
}
public function getuser(){
	$sql="select * from WD_user";

}
public function updateuser(){
	$sql="update set username='user'";
}
}