
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">
    <title>php voting system</title>
</head>
<body class="bg-dark py-4">
    <h1 class="text-success text text-center p-3" >Voting System</h1>
    <div class="bg-success">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="./actions/login.php" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username" 
                    placeholder="Enter Your Username" required="required">
                </div>
                <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto" name="mobile" 
                    placeholder="Enter Your Mobile Number" required="required" maxLength="11" minLength="10">
                </div>
                <div class="mb-3">
                <input type="password" class="form-control w-50 m-auto" name="password" 
                    placeholder="Enter Your password" required="required">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Political Party</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-dark my-4">Login</button>
                <p>Don't have an account? <a href="./partials/registration.php">Register</a></p>
                
            </form>
        </div>
    </div>
</body>
</html>