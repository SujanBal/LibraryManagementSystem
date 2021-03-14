<?php


class Signup extends Controller
{
    
    public function index()
    {
      
       
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
