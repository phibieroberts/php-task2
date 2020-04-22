<?php include_once('lib/header.php'); 

if(!isset($_SESSION['loggedIn'])){
    // redirect to dashboard
    header("Location: login.php");
}
?>
<h3>Dashboard</h3>

Welcome, <?php echo $_SESSION['fullname'] ?>, You are logged in as (<?php echo $_SESSION['role'] ?>), and your ID is <?php echo $_SESSION['loggedIn'] ?>.
<button  class="btn btn-secondary" > Book appointment</button>
<button class="btn btn-secondary"> Book appointment</button>

<?php include_once('lib/footer.php');?>