<?php
    header("Access-Control-Allow-Origin: ");
    header("content-type: application-json");
?>
<?php
    require_once("connection.php");

        $username=$_Post['username'];
        $password=$_Post['password'];

        if(isset($_Post['submit'])){
            $query="SELECT * FROM tbl_data where "username='".username."'and password='".password."'"";
            $result=mysqli_query($con,$query);

            if($row=$result->fetch_assoc()){
                echo "connected to database\n";
            }
            else{
                echo "not connected to databse\n";
            }
        }
?>