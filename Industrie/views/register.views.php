<?php $title = "Inscription"; ?>

<?php include('includes/constants.php');?>
<?php include('partials/_header.php'); ?>

<div id="main-content">
 <!-- Page content-->
 <div class="container">
            <h1>Devenez membre ^^</h1>

            // Name
            <form method="post">
                <div class="form-group">
                    <label class="control-label" for="name">Nom:</label>
                    <input type="text" class="form-control" id="name" name="name" required="required" />
                </div>

            // FirstName
                <div class="form-group">
                    <label class="control-label" for="firstname">Prénom:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required="required" />
                </div>

            // Pseudo
                <div class="form-group">
                    <label class="control-label" for="pseudo">Pseudo:</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" required="required" />
                </div>
            // Email
                <div class="form-group">
                    <label class="control-label" for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required="required" />
                </div>

            // Password
                <div class="form-group">
                    <label class="control-label" for="password">Mot de passe:</label>
                    <input type="password" class="form-control" id="password" name="password" required="required" />
                </div>

            // Password Confrim
                <div class="form-group">
                    <label class="control-label" for="password_confirm">Confirmez votre mot de passe:</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required" />
                </div>

            </form>
        </div>
    </div>
       
     <?php include('partials/_footer.php'); ?>