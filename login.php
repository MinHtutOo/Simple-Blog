
<?php
include_once "views/top.php";
include_once "views/nav.php";
include_once "sysgem/member.php";
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $ret = loginUser($email,$password);
    $message = "";
    switch($ret) {
        case "Login Success":
            $message = "Login Success";
            if(getSession("username") === "minhtut" && getSession("email") === "minhtutoo2003@gmail.com") {
                header("Location:admin.php");
            }else {
                header("Location:index.php");
            } 
            break;
        case "Login Fail":
            $message = "Login Fail";
            break;
        case "Auth Fail":
            $message = "Username and Password not in format";
            break;
        default:
            break;
    }
    echo "<div class='container my-3'><div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
    </button>
    " . $message . "
  </div></div>";
}
?>

<div class="container my-3" >
    <div class="col-md-8 offset-md-2 table-bodered p-5">
        <h1 class="text-danger english text-center mb-4">Login to See Special Post!</h1>
        <form action="login.php" class="form" method="post">
            <div class="form-group">
                <label for="email" class="english">Email</label>
                <input type="email" class="form-control english rounded-0" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password" class="english">Password</label>
                <input type="password" class="form-control english rounded-0" name="password" id="password">
            </div>
            <p></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-info float-right" type="submit" name="submit" value="submit">Login</button>
            </div>
        </form>
    </div>
</div>

<?php
    include_once "views/footer.php";
    include_once "views/base.php";
?>

