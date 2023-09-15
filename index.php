<?php require('dnlib/load.php');
$action->helper->route('/', function(){ global $action;
    $data['title']='CV maker :) '; 
    $action->view->load('header',$data);
    $action->view->load('content');
    $action->view->load('footer');
});

$action->helper->route('signup', function(){
    global $action;
    $data['title'] = 'Signup CV Online';
    $action->view->load('header', $data);
    });
//for signup
$action->helper->route('signup', function(){
    global $action;
    $data['title']='SignUp - CV Online';
    $action->view->load('header', $data);
    $action->view->load('signup_content');
    $action->view->load('footer');
    });
     
//for signup
$action->helper->route('signup', function(){ global $action;
    $data['title']='SignUp - CV Online';
    $action->view->load('header', $data);
    $action->view->load('signup_content'); $action->view->load('footer');
    });
    //for signup action
    $action->helper->route('action/signup', function(){ 
        global $action;
        $error = $action->helper->isAnyEmpty($_POST) ; 
    if($error) {
        $action->session->set('error','$error is empty!');
        $action->helper->redirect('signup');

    }else{
    $signup_data[0] = $action->db->clean ($_POST['full_name']);
    $signup_data[1] = $action->db->clean ($_POST['email_id']);
    $signup_data[2] = $action->db->clean ($_POST['password']);
    $action->db->insert('users', 'full_name, email_id, password',$signup_data);
    }
});    
print_r($isPageAvailale);
if(!Helper::$isPageAvailale){ echo "no page found"; }