<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>HTML Form</h1>
    <div class="container">
    <form action="connection.php" method="post">
    <div>
    <label> Name</label>
    <input type="text" name="name"
    placeholder="Enter your name" autocomplete="off">
    </div>
    <div>
    <label> Email</label>
    <input type="email" name="email"
    placeholder="Enter your email" autocomplete="off">
    </div>
    <div class="genderContainer">
    <label> Gender</label>
    <input class="gender1"type="radio" name="gender" value="m">Male
    <input class="gender1"type="radio" name="gender" value="f"> Female
    <input class="gender1"type="radio" name="gender" value="o"> Other
    </div>
    <div>
    <label> Mobile NO</label>
    <input type="mobile" name="mobile"
    placeholder="Enter your mobile no" autocomplete="off">
    </div>
    <div>
    <label> Passwaord</label>
    <input type="password" name="password"
    placeholder="Enter your password" autocomplete="off">
    </div>
    <div class="btn">
    <button type="submit"> Submit Data</button>
    </div>
    </form>
    </div>
  </body>
</html>