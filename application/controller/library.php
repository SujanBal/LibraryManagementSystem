<?php

class library extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
       
        $name=$this->model->getallBooks();

        if (isset($_GET["submit_countBook"])) {
            //S do updateSong() from model/model.php
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
           //$names=$this->model->getall($nam)p;prin
          
        }
       
      //oad views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/library/index.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * ACTION: addSong
     * This method handles what happens when you move to http://yourproject/songs/addsong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a song" form on songs/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function addBook()

    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_addBook"])) {
            $count=$this->model->countBookId($_POST["book_id"]);

              if($_POST["numbers"]>=0 and $count<=0){
            // do addSong() in model/model.php
                $this->model->addBook($_POST["book_id"], $_POST["book_name"], $_POST["numbers"], $_POST["book_id"]);
                 header('location: ' . URL . 'library?mode=success1');
              }
               else{
                header('location: ' . URL . 'library?mode=error1');
            }
            
        }
        // where to go after song has been added
       
    }

    public function addMoreBook($id)
    {
        $listBook=$this->model->addMoreBooks($id);

       
        // gettinpg all songs and amount of songs
      
        //$amount_of_songs = $this->model->getAmountOfSongs();

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/library/add.php';
        require APP . 'view/_templates/footer.php';
    }

     public function updateMoreBook($id)

    {
        $lists=$this->model->updateMoreBooks($id);

        // gettinpg all songs and amount of songs
      
        //$amount_of_songs = $this->model->getAmountOfSongs();

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/library/update.php';
        require APP . 'view/_templates/footer.php';
    }

     public function bookadd()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_bookadd"])) {
            

            if(($_POST["rand"]+$_POST["numbers"])>=0){
            // do updateSong() from model/model.php
            $this->model->bookadd($_POST["book_id"], $_POST["book_name"], $_POST["numbers"],$_POST["book_id"],$_POST["hel"], $_POST["rand"]);
               header('location: ' . URL . 'library?mode=success2');
                        }

            else{
                  header('location: ' . URL . 'library/addMoreBook/Book_Id?mode=error2');
            }
        }
        // where to go after song has been added
      

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
                // gettinpg all songs and amount of songs
              
                //$amount_of_songs = $this->model->getAmountOfSongs();

               // load views. within the views we can echo out $songs and $amount_of_songs easily
                require APP . 'view/_templates/header.php';
                require APP . 'view/library/update.php';
                require APP . 'view/_templates/footer.php';
                }
            }    
        // if we have an id of a song that should be deleted
        if(isset($_GET["yes_delete"])){
            $c=($_GET["num"]);
            $this->model->delBook($c);
            header('location: ' . URL . 'library?mode=successd1');
        }
        

        // where to go after song has been deleted
        
    }

     public function bookupdate()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_bookupdate"])) {

            $count=$this->model->countBookId($_POST["book_id"]);

           if($_POST["numbers"]>=0){
            // do addSong() in model/model.php
             $this->model->bookupdate($_POST["book_id"], $_POST["book_name"], $_POST["numbers"],$_POST["book_id"],$_POST["hel"]);
               header('location: ' . URL . 'library?mode=success3');
              }
                 else{
                header('location: ' . URL . 'library/updateMoreBook/Book_Id?mode=error3');
            }
            // do updateSong() from model/model.php
           
        }
        // where to go 
    }
}
