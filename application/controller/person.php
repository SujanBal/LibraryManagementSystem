<?php

class person extends Controller
{
    public function index()

      { 
        
      
        $name=$this->model->getAllPerson();
        
    
        require APP . 'view/_templates/header.php';
        require APP . 'view/person/index.php';
        require APP . 'view/_templates/footer.php';
    }


    public function addPerson()
    {

            if (isset($_POST["submit_addPerson"])) {

              $count1=$this->model->countBookId($_POST["book_i"]); 

                $count2=$this->model->countStudentId($_POST["student_id"]);

                if($count1>0 and $count2>0){

                    $bookll=$this->model->bookname($_POST["book_i"]);

                     $na= $this->model->searchB($_POST["book_i"]);
                     
                      $nam=$this->model->searchC($na,$_POST["book_i"]);

                        if($nam>0){    
              
                            $this->model->addPerson($_POST["student_id"], $_POST["person_name"], $_POST["book_i"],$bookll, $_POST["issued_date"], $_POST["returning_date"]);
                            header('location:' . URL . 'person?mode=success4');
                        }
                         else{
                      
                          header('location: ' . URL . 'person?mode=error4');
                        }
               
                }

                else{

                  header('location:' . URL . 'person?mode=error4');
                }
            }
             
   }
     
    public function editPerson($sn)
    {
        $lists=$this->model->selectPerson($sn);

        require APP . 'view/_templates/header.php';
        require APP . 'view/person/editperson.php';
        require APP . 'view/_templates/footer.php';
    }

     public function updatePerson()
    {
    
        if (isset($_POST["submit_updatePerson"])) {
            
            $count1=$this->model->countBookId($_POST["book_i"]);          

            $count2=$this->model->countStudentId($_POST["student_id"]);

                if($count1>0 and $count2>0){

                    $bookll=$this->model->bookname($_POST["book_i"]);

                     $na= $this->model->searchB($_POST["book_i"]);
                     
                      $nam=$this->model->searchC($na,$_POST["book_i"]);

                      if($nam>0){ 

                         $this->model->updatePerson($_POST["sn"],$_POST["student_id"],$_POST["person_name"], $_POST["book_i"],$bookll, $_POST["issued_date"], $_POST["returning_date"]);

                          header('location:' . URL . 'person?mode=success5');
                      }

                      else{

                         header('location:' . URL . 'person/editperson/SN?mode=error5');
                      }
                
                }

                else{

                  header('location:' . URL . 'person/editperson/SN?mode=error5');
                }
        }

        
    }

    public function delperson()
    {

         if(isset($_GET["submit_update"])){
            $b=implode($_GET["num"]);

             if(is_null($b))
                {
                    echo "select first";
                }
                else{
                     $lists=$this->model->selectPerson($b);
            
                require APP . 'view/_templates/header.php';
                require APP . 'view/person/editPerson.php';
                require APP . 'view/_templates/footer.php';
                }
            }    
        if(isset($_GET["yes_delete"])){
         
            $a= $_GET["num"];
             $this->model->delperson($a);
            header('location: ' . URL . 'person?mode=successd2');
        }
        
           
        

       
        
    }

}
