<?php
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "insert" ;

$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['address'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $query = "insert into form(name,email,age,address) values('$name' ,'$email' ,'$age' , '$address' )" ;

        $run = mysqli_query($conn,$query) or die (mysqli_error());
        
        if($run){
            echo "form submitted successfully";
        }
        else{
            echo "form not submitted";      
        }
    }
    else{
        echo "all fields are required";
    }
}

?>