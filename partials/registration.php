<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/voting/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/voting/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Voting System- Registration</title>

</head>
<body class="bg-dark">
    <h1 class="text-center text-success">Voting System</h1>
    <div class="bg-success py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
        <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                        <input type="text" class="form-control w-50 m-auto" name="username" 
                        placeholder="Enter Your Username" required="required">
            </div>
            <div class="mb-3">
                        <input type="text" class="form-control w-50 m-auto" name="mobile" 
                        placeholder="Enter Your Mobile Number" required="required">
            </div>
            <div class="mb-3">
                        <input type="password" class="form-control w-50 m-auto" name="password" 
                        placeholder="Enter Your password" required="required">
            </div>
            <div class="mb-3">
                        <input type="password" class="form-control w-50 m-auto" name="confirm" 
                        placeholder="Confirm password" required="required">
            </div>
            <div class="mb-3">
                        <input type="file" class="form-control w-50 m-auto" name="file" >
            </div>
            <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Political Party</option>
                        <option value="voter">Voter</option>
                    </select>
            </div>
            <button type="submit" name="submit" class=" btn btn-dark my-4">Register</button>
            <p>Already have an account? <a href="../" class="text-white">Login here</a></p>
        </form>
        </div>
    </div>
    
</body>
</html>