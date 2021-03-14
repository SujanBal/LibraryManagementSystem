<?php

class person extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()

      { 
        
        //$getname=$_GET["registration_no"];
        //$name1=$this->model->getname($getname);

        $name=$this->model->getAllPerson();
        
       // load views.ithin the views we can echo out $songs and $amount_of_songs easily
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
                    // do addSong() in model/model.php
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

        // gettinpg all songs and amount of songs
      
        //$amount_of_songs = $this->model->getAmountOfSongs();

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/person/editperson.php';
        require APP . 'view/_templates/footer.php';
    }

     public function updatePerson()
    {
        // if we have POST data to create a new song entry
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
                // gettinpg all songs and amount of songs
              
                //$amount_of_songs = $this->model->getAmountOfSongs();

               // load views. within the views we can echo out $songs and $amount_of_songs easily
                require APP . 'view/_templates/header.php';
                require APP . 'view/person/editPerson.php';
                require APP . 'view/_templates/footer.php';
                }
            }    
        if(isset($_GET["yes_delete"])){
           // $a=implode(",", $_POST["num"]);
            $a= $_GET["num"];
             $this->model->delperson($a);
            header('location: ' . URL . 'person?mode=successd2');
        }
        
           
        

        // where to go after song has been deleted
        
    }

}
