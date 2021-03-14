<?php

class library extends Controller
{
    
    public function index()
    {
       
        $name=$this->model->getallBooks();

        if (isset($_GET["submit_countBook"])) {
     
            $a=$this->model->searchA($_GET["searching"]);
           $na= $this->model->searchB($_GET["searching"]);
           if($na>0){
                 $nam=$this->model->searchC($na,$_GET["searching"]);
           
                if($nam>=0){
                    $n=$nam;
                }
                else{
                    $n=0;
                }
           }
           elseif($a>0){
                 $b=$this->model->searchD($_GET["searching"]);
                $n=$b;
           }
           else{
            $n="Id not found";
           }
          
          
        }
       
 
        require APP . 'view/_templates/header.php';
        require APP . 'view/library/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addBook()

    {
  
        if (isset($_POST["submit_addBook"])) {
            $count=$this->model->countBookId($_POST["book_id"]);

              if($_POST["numbers"]>=0 and $count<=0){
        
                $this->model->addBook($_POST["book_id"], $_POST["book_name"], $_POST["numbers"], $_POST["book_id"]);
                 header('location: ' . URL . 'library?mode=success1');
              }
               else{
                header('location: ' . URL . 'library?mode=error1');
            }
            
        }
    
       
    }

    public function addMoreBook($id)
    {
        $listBook=$this->model->addMoreBooks($id);

    
        require APP . 'view/_templates/header.php';
        require APP . 'view/library/add.php';
        require APP . 'view/_templates/footer.php';
    }

     public function updateMoreBook($id)

    {
        $lists=$this->model->updateMoreBooks($id);

    
        require APP . 'view/_templates/header.php';
        require APP . 'view/library/update.php';
        require APP . 'view/_templates/footer.php';
    }

     public function bookadd()
    {
     
        if (isset($_POST["submit_bookadd"])) {
            

            if(($_POST["rand"]+$_POST["numbers"])>=0){
      
            $this->model->bookadd($_POST["book_id"], $_POST["book_name"], $_POST["numbers"],$_POST["book_id"],$_POST["hel"], $_POST["rand"]);
               header('location: ' . URL . 'library?mode=success2');
                        }

            else{
                  header('location: ' . URL . 'library/addMoreBook/Book_Id?mode=error2');
            }
        }

    }

    public function delBook()
    {

         if(isset($_GET["add_book"])){
            $a=implode($_GET["num"]);
                if(is_null($a))
                {
                    echo "select first";
                }
                else
                {
                 $listBook=$this->model->addMoreBooks($a);
                
           
                require APP . 'view/_templates/header.php';
                require APP . 'view/library/add.php';
                require APP . 'view/_templates/footer.php';
                }
            }
         if(isset($_GET["update_book"])){

            $b=implode($_GET["num"]);
             if(is_null($b))
                {
                    echo "select first";
                }
                else{
                     $lists=$this->model->updateMoreBooks($b);
           
                require APP . 'view/_templates/header.php';
                require APP . 'view/library/update.php';
                require APP . 'view/_templates/footer.php';
                }
            }    
  
        if(isset($_GET["yes_delete"])){
            $c=($_GET["num"]);
            $this->model->delBook($c);
            header('location: ' . URL . 'library?mode=successd1');
        }
        

     
        
    }

     public function bookupdate()
    {
     
        if (isset($_POST["submit_bookupdate"])) {

            $count=$this->model->countBookId($_POST["book_id"]);

           if($_POST["numbers"]>=0){
        
             $this->model->bookupdate($_POST["book_id"], $_POST["book_name"], $_POST["numbers"],$_POST["book_id"],$_POST["hel"]);
               header('location: ' . URL . 'library?mode=success3');
              }
                 else{
                header('location: ' . URL . 'library/updateMoreBook/Book_Id?mode=error3');
            }
    
           
        }
     
    }
}
