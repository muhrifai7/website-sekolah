<?php 

 ?>
    

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Page!</h1>
                  </div>
                  
                  <form action="http://localhost/tryproject/admin_panel/public/login/auth" method="post" id="admin_login">  
                    <div class="form-group">
                     <input type="text" class="form-control form-control-user" id="email" value="" placeholder="Email" autocomplete="off">
                     <span id="error_email"></span>
                    </div> 

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" autocomplete="off"> 
                      <span id="error_email"></span> 
                    </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <input type="submit" name="login" class="btn btn-primary btn-user btn-block" id="submit" value="Login">
                     
                    </input>
                    <hr>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  

    
   