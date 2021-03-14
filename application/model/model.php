<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

     public function sign($student_id,$name,$pass)
     {
        $sql = "INSERT INTO signup (student_id,name,password) VALUES (:student_id,:name,:pass)";
        $query = $this->db->prepare($sql);
        $parameters = array(':student_id'=> $student_id,':name' => $name, ':pass' => $pass);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

     public function check($username,$password)
    {
        $sql = "SELECT COUNT(*) AS A FROM signup where name='$username' and password='$password'";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->A;
    }

     public function check1($username,$password)
    {
        $sql = "SELECT student_id  FROM signup where name='$username' and password='$password'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $row= $query->fetch();
        if($row){
            return $row->student_id;
        }
        else{
            return -1;
        }
    }

    public function countBookId($book_id)
    {
        $sql = "SELECT COUNT(*) AS A FROM book where Book_Id=$book_id";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->A;
    }
      
       public function countStudentId($student_id)
    {
        $sql = "SELECT COUNT(*) AS A FROM registration where student_id='$student_id'";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->A;
    }
     
    public function addBook($book_id,$book_name,$numbers,$help)
     {
        $sql = "INSERT INTO book (Book_Id, Book_Name,Numbers,help) VALUES (:book_id, :book_name, :numbers, :help)";
        $query = $this->db->prepare($sql);
        $parameters = array(':book_id'=> $book_id,':book_name' => $book_name, ':numbers' => $numbers, ':help'=>$help);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    public function getAllBooks()
    {
        $sql = "SELECT *  FROM book";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    public function updateMoreBooks($id)
    {
        $sql = "SELECT Book_Id, Book_Name, Numbers FROM book where Book_Id=$id";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

     public function addMoreBooks($id)
    {
        $sql = "SELECT Book_Id, Book_Name, Numbers FROM book where Book_Id=$id";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

 public function bookadd($book_id,$book_name, $numbers,$help,$hel, $rand)
    {
        $sql = "UPDATE book SET Book_Id = :book_id, Book_Name = :book_name, Numbers = :numbers, help=:help WHERE Book_Id = :hel";
        $query = $this->db->prepare($sql);
        $parameters = array(':book_id' => $book_id, ':book_name' => $book_name, ':numbers' => ($numbers+$rand), ':help'=>$help, ':hel'=>$hel);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    public function bookupdate($book_id,$book_name, $numbers,$help,$hel)
    {
        $sql = "UPDATE book SET Book_Id = :book_id, Book_Name = :book_name, Numbers = :numbers, help=:help WHERE Book_Id = :hel";
        $query = $this->db->prepare($sql);
        $parameters = array(':book_id' => $book_id, ':book_name' => $book_name, ':numbers' => $numbers, ':help'=>$help, ':hel'=>$hel);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

     public function delBook($book_id)
    {
        foreach ($book_id as $key => $value) {
        $sql = "DELETE FROM book WHERE Book_Id ='$value'";
        $query = $this->db->prepare($sql);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute();
        }
       
    }


    public function bookname($books)
    {

        $sql = "SELECT book.Book_Name AS B FROM book left join person on person.Book_Id=book.Book_Id  where help = :books";
        $query = $this->db->prepare($sql);
        $parameters=array(':books' => $books);
        $query->execute($parameters);

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetch()->B;
    }

   
    
    public function booknam($bookll)
    {

        $sql = "SELECT book.Book_Name AS Ba FROM book left join person on person.Book_Id=book.Book_Id  where help = :bookll";
        $query = $this->db->prepare($sql);
        $parameters=array(':bookll' => $bookll);
        $query->execute($parameters);

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetch()->Ba;
    }



    public function getname($getname){
         $sql = "SELECT student_name FROM registration where student_id='$getname'";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetch()->student_name;
    }


    public function addPerson($student_id,$person_name,$book_i,$bookl,$issued_date,$returning_date)
     {
        $sql = "INSERT INTO person (student_id,Person_Name,Book_Id,NameOfBook,Issued_Date,Returning_Date) VALUES (:student_id,:person_name,:book_i,:bookl,:issued_date, :returning_date)";
        $query = $this->db->prepare($sql);
        $parameters = array(':student_id'=>$student_id,':person_name' => $person_name,':book_i'=>$book_i,':bookl'=>$bookl, ':issued_date' => $issued_date, ':returning_date' => $returning_date );

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

   
    public function getAllPerson()

    {
        $sql = "SELECT SN,student_id,Person_Name,Book_Id,NameOfBook,Issued_Date,Returning_Date,
        case 
        when ((TO_DAYS(CURDATE())-TO_DAYS(Returning_Date))*5)>=0 then ((TO_DAYS(CURDATE())-TO_DAYS(Returning_Date))*5)
        when ((TO_DAYS(CURDATE())-TO_DAYS(Returning_Date))*5)<0 then 0
        end as Payment
         FROM person";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    public function selectPerson($val)
    {
        $sql = "SELECT SN,student_id, Person_Name, Book_Id, Issued_Date, Returning_Date FROM person where SN =$val";
        $query = $this->db->prepare($sql);
       
        $query->execute();
       
        return $query->fetchAll();
        
    }


 public function updatePerson($sn,$student_id,$person_name, $book_i,$bookll,$issued_date, $returning_date)
    {
        $sql = "UPDATE person SET student_id=:student_id, Person_Name = :person_name, Book_Id = :book_i,NameOfBook=:bookll, Issued_Date = :issued_date, Returning_Date= :returning_date WHERE SN =:sn";
        $query = $this->db->prepare($sql);
        $parameters = array(':sn'=>$sn,':student_id' => $student_id,':person_name' => $person_name, ':book_i' => $book_i,':bookll'=>$bookll, ':issued_date' => $issued_date, ':returning_date' => $returning_date);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

         public function delPerson($val)
    {
          foreach ($val as $key => $value) {
          $sql = "DELETE FROM person WHERE SN like '$value'";
        $query = $this->db->prepare($sql);
        //echo $sql;
        //exit;
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute();

        }
        
        
    }

        public function searchC($var,$var1)

    {
     
        $sql = "SELECT (book.Numbers-(:var)) AS CH FROM book left join person on person.Book_Id=book.Book_Id  where help = :var1";
        $query = $this->db->prepare($sql);
        $parameters=array(':var' => $var,':var1'=>$var1);
        $query->execute($parameters);

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetch()->CH;
    }

 public function searchB($var1)

    {
     
        $sql = "SELECT count(*) as C from person where Book_Id = :var1";
        $query = $this->db->prepare($sql);
        $parameters=array(':var1' => $var1);
        $query->execute($parameters);

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetch()->C;
    }

    public function searchA($var1)

    {
     
        $sql = "SELECT count(*) as A from book where Book_Id = :var1";
        $query = $this->db->prepare($sql);
        $parameters=array(':var1' => $var1);
        $query->execute($parameters);

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetch()->A;
    }

 public function searchD($var1)

    {
     
        $sql = "SELECT Numbers from book where Book_Id = :var1";
        $query = $this->db->prepare($sql);
        $parameters=array(':var1' => $var1);
        $query->execute($parameters);

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetch()->Numbers;
    }





    public function addRegistration($pic1,$pic2,$student_id,$student_name,$address,$guardian_name,$phone,$birth_date,$course,$enrolled_date)
     {
        $sql = "INSERT INTO registration (pic,picname,student_id,student_name,address,guardian_name,phone,birth_date,course,enrolled_date) VALUES ('$pic1','$pic2',:student_id,:student_name,:address,:guardian_name,:phone,:birth_date, :course,:enrolled_date)";
        $query = $this->db->prepare($sql);
        $parameters = array(':student_id' => $student_id,':student_name' => $student_name,'address'=>$address,':guardian_name'=>$guardian_name, ':phone' => $phone,':birth_date'=>$birth_date, ':course' => $course,':enrolled_date'=>$enrolled_date);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

   
    public function getRegistration()

    {
       

        $sql = "SELECT student_id,student_name,address,guardian_name,phone,birth_date,course,enrolled_date,
        case 
        when (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))<1 then '1st'
        when (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))>=1 and (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))<2 then '2nd'
        when (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))>=2 and (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))<3 then '3rd'
        when (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))>=3 and course='Bsc. IT' then 'Graduated'
        when (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))>=3 and (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))<4 and course='BBA' then '4th'
        else 'Graduated'
            end as year


        FROM registration";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

   


     public function selectRegister($val)
    {
        foreach ($val as $key => $value) {
          $sql = "SELECT student_id,student_name,address, guardian_name,phone,birth_date,course,enrolled_date FROM registration where student_id like '$value'";
        $query = $this->db->prepare($sql);
       
        $query->execute();

        return $query->fetchAll();
        }
    }


    public function selectRegistration($sn)
    {
        $sql = "SELECT pic,student_id, student_name, address, guardian_name,phone,birth_date,course,enrolled_date,
        case 
        when (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))<1 then '1st'
        when (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))>=1 and (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))<2 then '2nd'
        when (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))>=2 and (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))<3 then '3rd'
        when (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))>=3 and course='Bsc. IT' then 'Graduated'
        when (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))>=3 and (((TO_DAYS(CURDATE())-TO_DAYS(enrolled_date))/365))<4 and course='BBA' then '4th'
        else 'Graduated'
            end as year
         FROM registration where student_id='$sn'";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

     public function getmylibrary($sn)

    {
        $sql = "SELECT student_id,Book_Id,NameOfBook,Issued_Date,Returning_Date,
        case 
        when ((TO_DAYS(CURDATE())-TO_DAYS(Returning_Date))*5)>=0 then ((TO_DAYS(CURDATE())-TO_DAYS(Returning_Date))*5)
        when ((TO_DAYS(CURDATE())-TO_DAYS(Returning_Date))*5)<0 then 0
        end as Payment

         FROM person
         where student_id='$sn'";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

 public function getTotal($sn)

    {
        $sql = "SELECT 
        case
        when sum((TO_DAYS(CURDATE())-TO_DAYS(Returning_Date))*5)>=0 then sum((TO_DAYS(CURDATE())-TO_DAYS(Returning_Date))*5)
        when sum((TO_DAYS(CURDATE())-TO_DAYS(Returning_Date))*5)<0 then 0
        end as Total

         FROM person
         where student_id='$sn' and TO_DAYS(CURDATE())>=TO_DAYS(Returning_Date)";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetch()->Total;
    }


 public function updateRegistration($sn,$student_id,$student_name, $address,$guardian_name,$phone,$birth_date,$course, $enrolled_date)
    {
        $sql = "UPDATE registration SET student_id='$student_id', student_name = '$student_name', address = '$address',guardian_name='$guardian_name',phone = '$phone',birth_date = '$birth_date', course = '$course', enrolled_date= '$enrolled_date' WHERE student_id ='$sn'";

        $query = $this->db->prepare($sql);
      
        $query->execute();
    }

     public function delRegistration($val)
    {
       // print_r($val);
       // exit;
        foreach ($val as $key => $value) {
          $sql = "DELETE FROM registration WHERE student_id like '$value'";
        $query = $this->db->prepare($sql);
        //echo $sql;
        //exit;
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute();

        }
        

        
    }


     
}