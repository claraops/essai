<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="#"> 
  
  
</head>



    <body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                       
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                <div class="card-body">
                                    <form action="manager/inscription.php" method="Post" id="formulaire">  <div ><span id="erreur"></span></div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="firstname" name="firstname" type="text" placeholder="Enter your first name" required/>
                                                    <label for="login">First name</label>
                                                </div>
                                            </div>
                                           <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Enter your last name" required />
                                                    <label for="inputLastName">last name</label>
                                                </div>
                                            </div> <br> <br>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="telephone" name="telephone" type="text" placeholder="Enter your number"  />
                                                    <label for="inputLastName">telephone</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" required />
                                            <label for="email">Email address</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="password" name="password" type="password" placeholder="Create a password" required />
                                                    <label for="mot_de_passe ">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="passwordconfirm" type="password" placeholder="Confirm password" required />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                           
                                            <input type="submit" id="submit" value="Create Account" style="color: white; background-color: dodgerblue; border: 3px; display: inline-block; 
                                         padding: 5px 10px;border-radius: 4px;"> 
                                        </div>
                                        
                                    </form>

                                    <p id="message"></p>

                                   <p id="messagederreur"> veillez remplir tout les champs</p>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>



        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<!-- Template Main JS File -->


<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="js/form.js"></script>
</body>
</html>
