<?php
    # gives access to our database through $conn variable
    include_once 'includes/db.php'; 
    
?>



<?php
#php code for adding to db
$title = $_POST["title"];
$desc = $_POST["desc"];
$director = $_POST["director"];
$writer = $_POST["writer"];
$fact = $_POST["fact"];
$image = $_POST["image"];

#sql query to post to db
$queryStatement = "INSERT INTO Movies (title, description, director, writer, fact, img_url)
VALUES ('$title', '$desc', '$director', '$writer', '$fact', '$image');";

if ($conn->query($queryStatement) === TRUE) {
    echo "movie added... redirecting...";
    header( "refresh:5;url=index.html" );
}else {
    echo "error: " . $queryStatement . "<br><br>" . $conn->error;
    header( "refresh:5;url=index.html" );
}

?>


