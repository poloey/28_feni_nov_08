<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css"/>
</head>
<body class="bg-info">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card">
          <div class="card-header">
            <h2>Register Here</h2>
          </div>
          <div class="card-body">
            <?php if (! empty($message)) :  ?>
              <?= $message; ?>
            <?php endif; ?>
            <form action="" method="post">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control" required>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" required>
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" required>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-info">Register</button>
              </div>
              <p>Already registered? <a href="login.php" class="btn btn-link">Login Here</a> </p>
              
              
              

            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
</body>
</html>