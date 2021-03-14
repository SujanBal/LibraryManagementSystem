<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Signup extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
       
        require APP . 'view/signup/index.php';
     
    }

    public function sign() {

        if(isset($_POST["submit_signup"]))
        {
            $count2=$this->model->countStudentId($_POST["student_id"]);
            $a=$_POST["pass1"];
            $b=$_POST["pass2"];
            if($a==$b and $count2>0){
            $this->model->sign($_POST["student_id"],$_POST["name"],$a);
            header('location: ' . URL . 'signup?mode=signup');
           
            }
            else{
                header('location:' . URL . 'signup?mode=wrong1');
            }
        }
    }

    public function login() {

        if(isset($_POST["submit_checklogin"]))
        {

            $check=$this->model->check($_POST["username"],$_POST["password"]);
            $check1=$this->model->check1($_POST["username"],$_POST["password"]);
            
            if($check>0)
            {

                header('location: ' . URL . "cv/myDetails/$check1");
            }
            else{
                header('location:' . URL . 'signup?mode=wrong2');
            }
           
            
           
        }
    }

    
    
}
