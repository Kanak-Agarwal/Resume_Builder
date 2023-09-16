<?php
// session_start();
// require('config.php');
// require('class/database.class.php');
// require('class/custom.class.php');
// require('class/view.class.php');
// require('class/helper.class.php');
// require('class/session.class.php');
require('class/action.class.php');

$action=new Action;
echo "<pre>";

// print_r($action->db->read('users','full_name')); buhahahahah code to chl rha h 
// $action->db->insert('users','id,full_name,email_id,password,account_status',[3,"trial","trial@gmail.com","trial",0]);// push ho gaya buahhahahaah
// $action->db->insert('demo,'name,age', ['this is test' , 12]);
//$action->db->delete('users','id>2');  ye bhi kaam kr rha h buahahaha


//update not working yet
// print_r($action->db->update('users','password',["JOJO"],'id=2')); Nope not working

