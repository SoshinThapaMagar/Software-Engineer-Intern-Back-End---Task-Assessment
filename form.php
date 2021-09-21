<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Back End Task Assessment</h1>
    <form action="validation.php" method="post">
        <?php
            // Checking to see if there is an error in the name field or if everything was a success.
            if (isset($_SESSION["name-error"])){
                echo $_SESSION["name-error"];
                unset($_SESSION["name-error"]);
            }
            if (isset($_SESSION["success"])){
                echo $_SESSION["success"];
                unset($_SESSION["success"]);
            }
        ?>
        <label class="top-labels">Name:</label>
        <input type="text" name="user-name" class="top-inputs" value="<?php
            // Making the name field data persist
            if(isset($_SESSION['name-data'])){
                echo $_SESSION['name-data'];
                unset($_SESSION['name-data']);
            }
         ?>"> <br>
        <?php
            // Checking for any email field error and displaying the error
            if (isset($_SESSION["email-error"])){
                echo $_SESSION["email-error"];
                unset($_SESSION["email-error"]);
            }
        ?>
        <label class="top-labels">Email:</label>
        <input type="email" name="user-email" class="top-inputs" value="<?php
            // Making the email field data persist
            if(isset($_SESSION['email-data'])){
                echo $_SESSION['email-data'];
                unset($_SESSION['email-data']);
            }
        ?>"> <br>
        <?php
            // Checking for any phone number field error and displaying the error
            if (isset($_SESSION["number-error"])){
                echo $_SESSION["number-error"];
                unset($_SESSION["number-error"]);
            }
        ?>
        <label class="top-labels">Phone No:</label>
        <input type="number" name="phone-number" class="top-inputs" min="0" value="<?php
            // Making the phone number field data persist
            if(isset($_SESSION['phone-data'])){
                echo $_SESSION['phone-data'];
                unset($_SESSION['phone-data']);
            }
        ?>"> <br>
        
        <?php
            // Checking for any gender radio button error and displaying the error
            if (isset($_SESSION["gender-error"])){
                echo $_SESSION["gender-error"];
                unset($_SESSION["gender-error"]);
            }
        ?>
        <h2>Gender</h2>
        <input type="radio" name="gender" value="Male" <?php 
         // Checking the radio buttons and making the buttons picked persist
        if(isset($_SESSION['gender-data'])){
            if($_SESSION['gender-data']=='Male'){
                echo 'checked';
            }
        }?> >
        <label>Male</label>

        <input type="radio" name="gender" value="Female" <?php 
        // Checking the radio buttons and making the buttons picked persist
        if(isset($_SESSION['gender-data'])){
            if($_SESSION['gender-data']=='Female'){
                echo 'checked';
            }
        }?> >
        <label>Female</label>
        <input type="radio" name="gender" value="Others" <?php 
        // Checking the radio buttons and making the buttons picked persist
        if(isset($_SESSION['gender-data'])){
            if($_SESSION['gender-data']=='Others'){
                echo 'checked';
            }
        }?> >
        <label>Others</label>
        
        <?php
            unset($_SESSION['gender-data']);
            // Checking for any hobby checkbox error and displaying the error
            if (isset($_SESSION["hobby-error"])){
                echo $_SESSION["hobby-error"];
                unset($_SESSION["hobby-error"]);
            }            
        ?>
        <h2>Hobbies</h2>
        <input type="checkbox" name="hobby[]" value="Reading" <?php
            // Checking the checkbox and making the checkbox picked persist
            if(isset($_SESSION["hobby-data"])){
                foreach($_SESSION["hobby-data"] as $value){
                    if($value == "Reading"){
                        echo "checked";
                    }
                }
            }
        ?>>
        <label>Reading</label>
        <input type="checkbox" name="hobby[]" value="Traveling" <?php
            // Checking the checkbox and making the checkbox picked persist
            if(isset($_SESSION["hobby-data"])){
                foreach($_SESSION["hobby-data"] as $value){
                    if($value == "Traveling"){
                        echo "checked";
                    }
                }
            }
        ?>>
        <label>Traveling</label>
        <input type="checkbox" name="hobby[]" value="Listening to music" <?php
            // Checking the checkbox and making the checkbox picked persist
            if(isset($_SESSION["hobby-data"])){
                foreach($_SESSION["hobby-data"] as $value){
                    if($value == "Listening to music"){
                        echo "checked";
                    }
                }
            }
        ?>>
        <label>Listening to music</label>
        <input type="checkbox" name="hobby[]" value="Gaming" <?php
            // Checking the checkbox and making the checkbox picked persist
            if(isset($_SESSION["hobby-data"])){
                foreach($_SESSION["hobby-data"] as $value){
                    if($value == "Gaming"){
                        echo "checked";
                    }
                }
                unset($_SESSION['hobby-data']);
            }
        ?>>
        <label>Gaming</label>

        <input type="submit" name="submit" class="submit">
    </form>

</body>
</html>