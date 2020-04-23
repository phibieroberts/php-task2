<?php include_once('lib/header.php');
if(!isset($_SESSION['loggedIn'])){
   // redirect to dashboard
header("Location: login.php");
   
}
     $userObject = json_decode($_SESSION['userObject']);
?>
<h3>Dashboard</h3>
<p>Welcome,</p>
<?php echo $userObject->first_name ." ". $userObject->last_name; ?> You are logged in as( <?php echo $userObject->designation;?> and your ID is <?php echo $_SESSION['loggedIn'] ?>
<?php include_once('lib/footer.php');
?>