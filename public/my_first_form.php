<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>My First HTML Form</title>
</head>
<body>

<h2>User Login</h2>

<form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input placeholder="Enter your username" id="username" name="username" type="text">
    </p>
    <p>
        <label for="password">Password</label>
        <input placeholder="Enter your password" id="password" name="password" type="password">
    </p>
    <p>
        <input type="submit">

<p>
    <h2>Compose an email</h2>
</p>

<form>
    <p>
        <label for="to">To</label>
        <input type="text" id="input" name="input"></input>
    </p>
    <p>
      <label for="from">From</label>
      <input type="text" id="from" name="from"></input>
    </p>
    <p>
      <label for="subject">Subject</label>
      <input id="subject" name="subject"></input>
    </p>
    <p>
      <label for="body">Body</label>
      <textarea type="text" id="body" name="Body"></textarea>
    </p>
  <input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
  <label for="save_copy">Save copy of email</label>
  <button type="submit">Send</button>  
</form>

<div>
<h2>Multiple Choice Test</h2>
</div>
<form>
  <div>
  Who is Simba's father?
  <label>
    <input type="radio" name="father" value="Mufasa">
    Mufasa
  </label>
  <label>
    <input type="radio" name="father" value="Scarr">
    Scarr
  </label>
  </div>
  <div>
    Who is cooler?
    <label>
      <input type="radio" name="cooler" value="Timon">
      Timon
    </label>
    <label>
      <input type="radio" name="cooler" value="Pumba">
      Pumba
    </label>
  </div>
  
  <div>
    What do you put in your hamburger?
   <label><input type="checkbox" id="burger1" name="extras[]" value="Pickles">Pickles</label>
   <label><input type="checkbox" id="burger2" name="extras[]" value="Tomatoes">Tomatoes</label>
   <label><input type="checkbox" id="burger3" name="extras[]" value="Cheese">Cheese</label>
   <label><input type="checkbox" id="burger4" name="extras[]" value="Jalapenos">Jalapenos</label>
  </div>

  <label for="condiment">What condiments do you like?</label>
  <select id="condiment" name="condiment[]" multiple>
    <option value="mayo">Mayo</option>
    <option value="ketchup">Ketchup</option>
    <option value="mustard">Mustard</option>
  </select>
  <button type="submit">Submit</button>
</form>

<form>
  <div><h2>Select Testing</h2>
    <label for="sleepy">Are you sleepy?</label>
    <select id="sleepy" name="sleepy">
      <option value="1">Yes</option>
      <option value="0">No</option>
    </select>
    <button type="submit">Submit</button>
  </div>
</form>

</body>
</html>
