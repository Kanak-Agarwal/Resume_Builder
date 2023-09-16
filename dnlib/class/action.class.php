<?php
require_once("session.class.php");
require("custom.class.php");
require("view.class.php");
require("database.class.php");
require("helper.class.php");
// $servername = 'localhost';
// $username=  'root';
// $password = '';
// $database = "cv";

// $conn = mysqli_connect($servername, $username, $password, $database);
// echo "success connection";
class Action{
public $db, $session, $custom, $view, $helper;

function onlyForAuthUser() {
    if($this->session->get('Auth')) $this->helper->redirect('home');
}
function onlyForUnauthUser(){
    if(!$this->session->get('Auth')) $this->helper->redirect('login'); 
}

function __construct() {
        $this->db=new Database;
        
        $this->session=new Session;
        $this->custom=new Custom;
        $this->view=new View;
        $this->helper=new Helper ;
        // $this->db=new Database;
        // echo "<br>Everyobject made perfectly<br>";
    } 
}

$a = new Action();

// print_r($a);