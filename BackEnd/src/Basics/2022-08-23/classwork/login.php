<?php  
session_start();

if(isset($_SESSION['user'])) {
    header("Location: location.php"); 
 }

if(isset($_POST['login'])) {
    $usersFile = file_get_contents('users.json');
    $usersData = json_decode($usersFile, TRUE);

    //https://stackoverflow.com/questions/6661530/php-multidimensional-array-search-by-value
    $search = $_POST['user'];
    $found = array_filter($usersData['users'],function($v,$k) use ($search){
    return $v['username'] == $search;
    },ARRAY_FILTER_USE_BOTH); // With latest PHP third parameter is optional.. Available Values:- ARRAY_FILTER_USE_BOTH OR ARRAY_FILTER_USE_KEY  

    $values= array_values($found);
    $keys =  array_keys($found); 

    if(empty($found)) {
        $_SESSION['error'] = 1;
        header('Location: index.php');
    } else {
        $userId = $keys[0];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        // echo $usersData['users'][$userId]['username'];
        $userInDb = $usersData['users'][$userId]['username'];
        $passwdInDb = $usersData['users'][$userId]['password'];
        
        if($user == $userInDb && $pass == $passwdInDb){
            $cookieTtime = 60*60*24*60 + time();
            setcookie('lastVisit', date("Y-m-d - H:i:s"), $cookieTtime);
            $_SESSION['user'] = $user;
            $_SESSION['userID'] = $userId;
            $_SESSION['latitude'] = $usersData['users'][$userId]['location']['coordinates']['latitude'];
            $_SESSION['longitude'] = $usersData['users'][$userId]['location']['coordinates']['longitude'];
            header('Location: location.php');
        } else {
            // echo "invalid UserName or Password";
            $_SESSION['error'] = 1;
            header('Location: index.php');
        }
    }
}
header('Location: index.php');