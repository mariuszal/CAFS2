<?php
session_start();

if(isset($_SESSION['user'])) {
    if(isset($_COOKIE['lastVisit'])) {
        $lastVisit = $_COOKIE['lastVisit'];
    } else {
        $lastVisit = 'none';
    }
    echo "<a href='logout.php'>logout</a><br>";
    echo "UserID:" . $_SESSION['userID'] . " | User:" . $_SESSION['user'] 
    . " | Last visit: " . $lastVisit . "<br><br>";
    echo "Location: <br>";
    echo " Latitude: " . $_SESSION['latitude'] . "<br>";
    echo " Longtitude: " . $_SESSION['longitude'] . "<br>"; 
    
} else {
    header('Location: index.php');
}

