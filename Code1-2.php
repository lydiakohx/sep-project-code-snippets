//check to ensure there was a post data
if(!empty($_POST)) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = mysqli_query($conn,"SELECT * from users where email='$email' and password=MD5('$password')");
    $result = mysqli_fetch_assoc($query);
    //check if result contains something.
    if($result) {
        $_SESSION["loggedInUser"] = $result;
        header("Location: /delivery");
    } else {
        $_SESSION["loginErrorMessage"] = "You have entered the wrong login credentials. Please try again.";
        header("Location: ../views/login.php");
    }
}