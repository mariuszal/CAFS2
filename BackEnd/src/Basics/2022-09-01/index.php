<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>shrt.me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>shrt.me - make it shorter....</h1>
    <form method="POST" action="">
    <div class="mb-3">
        <label for="url-input" class="form-label">Just enter your URL</label>
        <input type="text" class="form-control" id="url-input" name="url" value="https://">
        <div id="emailHelp" class="form-text">*It should start with http:// or https://</div>
        <div id="emailHelp" class="form-text"><? echo $_SESSION['error'] ?></div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </div>
  </body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once 'action.php';
  echo putUrl($_POST['url']);
}