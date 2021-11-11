<?php $title = "Inscription"; ?>

<?php include('includes/constants.php');?>
<?php include('partials/_header.php'); ?>

<div id="main-content">
 <!-- Page content-->
 <div class="container">
            <h1 class="text-center">Devenez membre ^^</h1>

             <!-- Name-->
            <form method="post" class="well col-md-6 offset-md-3">
                <div class="form-group">
                    <label class="control-label" for="name">Nom:</label>
                    <input type="text" class="form-control" id="name" name="name" required="required" />
                </div>

            <!-- Firstname-->
                <div class="form-group">
                    <label class="control-label" for="firstname">Prénom:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required="required" />
                </div>

            <!-- Pseudo-->
                <div class="form-group">
                    <label class="control-label" for="pseudo">Pseudo:</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" required="required" />
                </div> 

            <!-- Email-->
                <div class="form-group">
                    <label class="control-label" for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required="required" />
                </div>

            <!-- Password -->
                <div class="form-group">
                    <label class="control-label" for="password">Mot de passe:</label>
                    <input type="password" class="form-control" id="password" name="password" required="required" />
                </div>

           <!-- Password Confirm -->
                <div class="form-group">
                    <label class="control-label" for="password_confirm">Confirmez votre mot de passe:</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required" />
                
                </div>

                <!-- Submit Button -->
                <input type="submit" class="btn btn-primary" value="Inscription" name="register"/>
            </form>
        </div>
    </div>
       
     <?php include('partials/_footer.php'); ?>