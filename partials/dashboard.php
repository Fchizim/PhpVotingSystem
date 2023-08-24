<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:../');
}
$data=$_SESSION['data'];
if($_SESSION['status']==1){
    $status='<b class="text-light h3"> Voted</b>';
}else{
    $status='<b class="text-danger h3"> Not Voted</b>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System - Dashboard</title>
    <!-- bootstrap and fontawesome -->
    <link href="/voting/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <!-- css -->

</head>
<body class="bg-success text-light">
   <div class="container my-5">
    <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
    <a href="logout.php"><button class="btn btn-danger text-light px-3">logout</button></a>
    <h1 class="my-3">Voting System</h1>
    <div class="row my-5">
        <div class="col-md-7">
            <?php
            if(isset($_SESSION['groups'])){
                $groups=$_SESSION['groups'];
                for($i=0;$i<count($groups);$i++){
                    ?>
                    <div class="row">
                    <div class="col-md-4">
                        <!-- <img src="../uploads/<?php echo $groups[$i]['dimage'] ?>" 
                        alt="Party image"> -->
                    </div>
                    <div class="col-md-8">
                        <strong class="text-dark h5">Political Party:</strong>
                        <b class="fs-3"><?php echo $groups[$i]['username'] ?></b> <br><br>
                        <strong class="text-dark h5">Votes:</strong>
                        <?php echo $groups[$i]['votes'] ?><br><br>
                    </div>
                </div>
                
                <form action="../actions/voting.php" method="post">
                <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes'] ?>">
                <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id'] ?>">

                <?php
                if($_SESSION['status']==1){
                    ?>
                    <button class="bg-danger btn text-white px-4">Voted</button>
                    <?php
                }else{
                    ?>
                    <button type="submit" class="btn btn-light text-success px-4">Vote</button>
                    <?php
                }
                ?>
               </form>
               <hr>
                <?php
                }
            }else{
                ?>
                <div class="container">
                    <p>No parties to displayed</p>
                </div>
                <?php
            }

            
            ?>
           
        </div>
        <div class="col-md-5">
            <!-- user -->
            <img src="../uploads/<?php echo $data['dimage']?>" alt="User image">
            <br>
            <br>
            <strong class="text-dark h5">Name:</strong><br>
            <?php echo $data['username'];?><br><br>
            <strong class="text-dark h5">Mobile:</strong><br>
            <?php echo $data['dphone'];?><br><br>
            <strong class="text-dark h5">Status:</strong><br>
            <?php echo $status;?><br><br>
        </div>
    </div>
   </div>
</body>
</html>