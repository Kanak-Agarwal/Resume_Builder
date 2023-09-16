<?php require('dnlib/load.php');
$action->helper->route('/', function(){ global $action;
    $data['title']='CV maker :) '; 
    $action->view->load('header',$data);
    $action->view->load('navbar');
    $action->view->load('content');
    $action->view->load('footer');
});


//to select template

//for template
$action->helper->route('select-template', function(){ global $action;
    $action->onlyForAuthUser();
    $data['title']="Select CV Template";
    $data['myresume'] = 'active';
    $action->view->load('header', $data);
    $action->view->load('navbar', $data);
    $action->view->load('template_content');
    $action->view->load('footer');
    });

    //for template
$action->helper->route('create', function(){ global $action;
    $action->onlyForAuthUser();
    $data['title']="Enter CV details";
    $data['myresume'] = 'active';
    $action->view->load('header', $data);
    $action->view->load('navbar', $data);
    $action->view->load('create_content');
    $action->view->load('footer');
    });


//for home
$action->helper->route('home', function(){ 
    global $action;
    // global $action ;
    // $action->onlyForAuthUser();
    $data['title']='Sweet Home :) '; 
    $data['myresume']='active'; 
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
    $action->view->load('content');
    $action->view->load('footer');
});

//for Logout
$action->helper->route("action/logout", function(){ 
    global $action;
    $action->session->delete('Auth');
    $action->helper->redirect('login'); 
});

 
     
//for signup
$action->helper->route('signup', function(){ 
    global $action;
    // $action->onlyForUnauthUser();
    $data['css']=2 ;
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
    }
    else{
    $signup_data[0] = $action->db->clean ($_POST['full_name']);
    $signup_data[1] = $action->db->clean ($_POST['email']);
    $signup_data[2] = $action->db->clean ($_POST['password']);
    $user=$action->db->read('users', 'email_id', "WHERE email_id='.$signup_data[1]'");
    
    if(count($user)>0){
    $action->session->set('error', $signup_data[1]." is already registered"); $action->helper->redirect('signup');
    }else{
    $action->db->insert('users', 'full_name, email_id, password', $signup_data); $action->helper->redirect('login');
    }
}

});    

//for Login
$action->helper->route('login', function(){
    global $action;
    $data['css']=2 ;
    // $action->onlyForUnauthUser();
    $data['title'] = 'Login - CV Online';
    $action->view->load('header', $data);
    $action->view->load('login_content');
    $action->view->load('footer');
});
//cv builder route

$action->helper->route('cvbuilder', function(){
    global $action;
    // $action->onlyForAuthUser();
    $data['title']='CV Builder';
    $data['myresume'] = 'active';
    $data['css']=1 ;
    $action->view->load('header', $data);
    $action->view->load('navbar', $data);
    $action->view->load('cvbuilder_content_1');
    $action->view->load('footer');
    });

    $action->helper->route('cvbuilder/$type', function($data){ global $action;
        // $action->onlyForAuthUser();
        $data['title']="Type ".$data['type']." Cv";
        $data['myresume'] = 'active';
        $action->view->load('header', $data);
        $action->view->load('navbar', $data);
        if($data['type']==1){
        $action->view->load('cv_content_1');
        }else{
        $action->helper->redirect('home');
        }
        $action->view->load('footer'); 
    });   
    
    //action login route
$action->helper->route('action/login', function(){
    global $action;
    $error= $action->helper->isAnyEmpty($_POST);
    if($error) {

    }else{
    $email=$action->db->clean ($_POST['email']);
    $password= $action->db->clean($_POST['password']);
    $user = $action->db->read('users', 'id, email_id', "WHERE email_id='$email' AND password='$password'") ;
    if(count($user)>0){
        $action->session->set('Auth', ['status' => true, 'data' => $user[0]]);
        $action->helper->redirect('home');
        }else{
        $action->session->set('error', "incorrect email/password");
        $action->helper->redirect('login');
        }
    }
    });

    if(!Helper::$isPageAvailale){
        $data['title']='No Page Found';
        $action->view->load('header', $data);
        $action->view->load('navbar', $data);
        $action->view->load('nnot_found');
        $action->view->load('footer');
        }
