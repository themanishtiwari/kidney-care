
  <form method="post">
    Password: <input type="text" name="password">
    <button type="submit" name="submit">Submit</button>
  </form>
  <?php
  // The plain text password to be hashed
  if(isset($_POST['submit'])){
  $plaintext_password = $_POST['password'];
  
  // The hash of the password that
  // can be stored in the database
  $hash = password_hash($plaintext_password, 
          PASSWORD_DEFAULT);
  
  // Print the generated hash
  echo "Generated hash: ".$hash;
  }
?>