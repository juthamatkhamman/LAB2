<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
</head>

<body>
<h1>Personal Information</h1>
    <?php
    
    $name = $_GET["name"];
    $age = $_GET["age"];
    $sex = $_GET["sex"];
    $status = $_GET["status"];

    echo "Name : ";
    if ($age <= "14") 
    { if ($sex == "male") 
        {
            echo "Mstr."; 
        }
        else if ($sex == "female")
        {
           echo "Miss"; 
        }
    } 
    else if ($age >= "15") 
    { if ($sex == "male")
        {
            echo "Mr."; 
        }
        else if ($sex == "female")
        { if ($status == "married") 
            {
                echo "Mrs."; 
            }
            else if ($status == "single") 
            {
                echo "Miss"; 
            }
            
        }
    }
    
    
    echo "  " . "$name" . "<br>";
    echo "Age : " . "$age" . "<br>";
    echo "Sex : " . "$sex" . "<br>";
    echo "Status : " . "$status" . "<br>";

    ?>


</body>

</html>