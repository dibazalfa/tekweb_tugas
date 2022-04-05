<h1> Registration Page </h1>
 <br>
  <form action="<?php echo site_url('Register/insert');?>" method="post">
     <div class="form-group">
         <label for="username">Name:</label>
         <input type="text" class="form-control" id="username" placeholder="Enter Name" name="username">
     </div>
     <div class="form-group">
         <label for="password">Password:</label>
         <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
  <br>