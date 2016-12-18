<?php include('includes/header.php'); ?>



 <form role="form" enctype="multipart/form-data" method="post" action="register.php">
                        
                        <div class="form-group">
                          <label>Name*</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                        </div>   


                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" name="email" class="form-control"  placeholder="Enter your Email Address">
                        </div>

                         <div class="form-group">
                          <label>Choose Username*</label>
                          <input type="text" name="username" class="form-control"  placeholder="Create a Username">
                        </div>


                        <div class="form-group">
                          <label >Password*</label>
                          <input type="password" name="password" class="form-control" placeholder="Enter a Password">
                        </div>


                        <div class="form-group">
                          <label >Confirm Password*</label>
                          <input type="password" name="password2" class="form-control" placeholder="Enter Password Again">
                        </div>


                        <div class="form-group">
                          <label >Upload Avatar</label>
                          <input type="file" name="avatar">
                          <p class="help-block"></p>
                        </div>


                         <div class="form-group">
                          <label >About Me</label>

                          <textarea id="about" rows="6" cols="80" class="form-control" name="about" placeholder="Tell us about yourself(Optional)"></textarea>
                         
                        </div>



                      

                        <input name="register" type="submit" class="btn btn-default" value="Register"/>
                      </form>


<?php include('includes/footer.php'); ?>