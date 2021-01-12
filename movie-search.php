<?php
    header("Content-type: text/xml");
    echo "<?xml version=\"1.0\" ?>\n";
    #php logic for dynamic search
    #gives access to our database through $conn variable
    include_once 'includes/db.php'; 
    #gets results from query to db
    $results = mysqli_query($conn, "SELECT title FROM Movies;");
    #create array from sql results
    while($arr[] = mysqli_fetch_assoc($results));
    $titles = array_column($arr, 'title'); 
    #get input and compare to elements of array
    foreach($titles as $i) {
	if (stristr($i, $_GET['query'])) {
	    echo $i . "<br>";
        }
    }
?>