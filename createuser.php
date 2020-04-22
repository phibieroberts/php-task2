<?php include_once('lib/header.php');
 require_once('functions/alert.php');
 if($_SESSION['role']!=="Super Admin"){
    redirect_to("login.php");}
// include_once('lib/header.php');

?>
<div class="container">
    <div class="row col-6">
        <h3>Create User</h3>
    </div>
    <div class="row col-6">
        <p><strong>Welcome, Please Register</strong></p>
    </div>
    <div class="row col-6">
        <p>All Fields are required</p>
    </div>
    <div class="row col-6">

        <form method="POST" action="createuser.php">
        <p>
            <?php  print_alert(); ?>
        </p>
            <p>
                <label>First Name</label><br />
                <input  
                <?php              
                    if(isset($_SESSION['first_name'])){
                        echo "value=" . $_SESSION['first_name'];                                                             
                    }                
                ?>
                type="text" class="form-control" name="first_name" placeholder="First Name" pattern="^\D*$" minlength="3" required/>
            </p>
            <p>
                <label>Last Name</label><br />
                <input
                type="text" class="form-control" name="last_name" placeholder="Last Name" pattern="^\D*$" minlength="3" required />
            </p>
            <p>
                <label>Email</label><br />
                <input
                
                <?php              
                    if(isset($_SESSION['email'])){
                        echo "value=" . $_SESSION['email'];                                                             
                    }                
                ?>

                type="email" class="form-control" name="email" placeholder="Email" minlength="5" required/>
            </p>

            <p>
                <label>Password</label><br />
                <input type="password" class="form-control" name="password" placeholder="Password"  required/>
            </p>
            <p>
                <label>Gender</label><br />
                <select class="form-control" name="gender" >
                <?php              
                    if(isset($_SESSION['department'])){
                        echo "value=" . $_SESSION['department'];                                                             
                    }                
                ?>
                    <option value="">Select One</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){
                            echo "selected";                                                           
                        }                
                    ?>
                   required >Female</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male'){
                            echo "selected";                                                           
                        }                
                    ?>
                   required >Male</option>
                </select>
            </p>
        
            <p>
                <label>Designation</label><br />
                <select class="form-control" name="designation" >
                
                    <option value="" required>Select One</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Medical Team (MT)'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Medical Team (MT)</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Patient'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Patient</option>
                </select>
            </p>
            <p>
                <label class="label" for="department">Department</label><br />
                <input
                <?php              
                    if(isset($_SESSION['department'])){
                        echo "value=" . $_SESSION['department'];                                                             
                    }                
                ?>
                type="text" id="department" class="form-control" name="department" placeholder="Department"  required/>
            
            </p>
            <p>
                <button class="btn btn-sm btn-success" type="submit">Create User</button>
            </p>
        </form>

    </div>

</div>
<?php include_once('lib/footer.php'); ?>