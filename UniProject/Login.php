<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Balanced Bite</title>
    <link rel="stylesheet"  href="style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <script src="Home.js"></script>
</head>
<style>body{ background-color: #40404080;}</style>
<body>
    <nav class="navbar">
      <div class="logo">
        <a href="#welcome">The Balanced Bite</a>
      </div>
        <ul>
            <li>
            <a class="nav-link" href="Home.html" target="_top">Home</a>
            </li>
            <li>
              <a class="nav-link" href="List.html" target="_top">Our List</a>
            </li>
            <li>
            <a class="nav-link" href="About.html" target="_top">About</a>
            </li>
            <li>
            <a class="nav-link" href="contact.html" target="_top">Contact us</a>
            </li>
        </ul>
        <div class="logo">
            <a href="#"><img src="images/logo.png" alt="My Logo"></a>
          </div>
    </nav>
    <center><h2>Login </h2></center>
    <form id="registrationForm">
      <label for="firstName">First Name:</label><br>
      <input type="text" id="firstName" name="firstName" required minlength="4"><br>

      <label for="lastName">Last Name:</label><br>
      <input type="text" id="lastName" name="lastName" required><br>

      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br>

      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password" required pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}$" minlength="8"><br>

      <input type="submit" value="Register">
    </form>



    <script>
      
      const registrationForm = document.getElementById("registrationForm");

      registrationForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const firstName = document.getElementById("firstName").value;
        const lastName = document.getElementById("lastName").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        if (firstName.length < 4) {
          alert("First name must be at least 4 letters");
          return;
        }

        if (!password.match(/^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/)) {
          alert("Password must be at least 8 characters and contain at least 1 number");
          return;
        }

        if (!email.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,}$/)) {
          alert("Please enter a valid email address");
          return;
        }

      
        alert(`First Name: ${firstName}\nLast Name: ${lastName}\nEmail: ${email}\nPassword: ${password}`);
        registrationForm.reset();
      });
    </script>
  </body>
</html>
