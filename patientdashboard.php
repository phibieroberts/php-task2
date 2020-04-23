<?php include_once('lib/header.php'); 

if(!isset($_SESSION['loggedIn'])){
    // redirect to dashboard
    header("Location: login.php");
}
?>
<h3>Dashboard</h3>
 <p>Email: <strong><?php echo $_SESSION['email'] ?></strong></p>
 <p>Your are logged in as: <strong><?php echo $_SESSION['role'] ?></strong></p>
Welcome, <?php echo $_SESSION['fullname'] ?>, You are logged in as (<?php echo $_SESSION['role'] ?>), and your ID is <?php echo $_SESSION['loggedIn'] ?>.
<a href="bookappointment.php"><button  class="btn btn-secondary" > paybills</button></a>
<a href="bookappointment.php"><button class="btn btn-secondary"> Book appointment</button></a>

<?php include_once('lib/footer.php');?>