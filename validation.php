<?php
    session_start();
    if(isset($_POST["submit"])){
        
        if($_POST["user-name"] === ""){
            $_SESSION["name-error"] = "<h5>Username is required</h5>";
        }elseif(strlen($_POST["user-name"]) < 5){
            $_SESSION["name-error"] = "<h5>Name should not be less then 5 characters</h5>";
            $_SESSION["name-data"] = $_POST["user-name"];
        }else{
            $_SESSION["name-data"] = $_POST["user-name"];
        }

        if($_POST["user-email"] === ""){
            $_SESSION["email-error"] = "<h5>Email is required</h5>";
        }else{
            $_SESSION["email-data"] = $_POST["user-email"];
        }

        if($_POST["phone-number"] === ""){
            $_SESSION["number-error"] = "<h5>Phone Number is required</h5>";
        }else{
            $_SESSION["phone-data"] = $_POST["phone-number"];
        }

        if(!isset($_POST["gender"])){
            $_SESSION["gender-error"] = "<h5>Gender is required</h5>";
        }else{
            $_SESSION["gender-data"] = $_POST["gender"];
        }

        if(!isset($_POST["hobby"])){
            $_SESSION["hobby-error"] = "<h5>Hobby is required</h5>";
        }else{
            $_SESSION["hobby-data"] = $_POST["hobby"];
        }

        
        if(!isset($_SESSION["name-error"]) && !isset($_SESSION["email-error"]) && !isset($_SESSION["number-error"]) && !isset($_SESSION["gender-error"]) && !isset($_SESSION["hobby-error"])){
            session_destroy();
            session_start();
            $_SESSION["success"] = "<h5 class='success'>Congratulations! All the field was entered correctly</h5>";
        }
        header("Location:form.php");
    }
?>
