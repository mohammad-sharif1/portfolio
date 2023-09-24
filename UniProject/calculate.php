<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Balanced Bite</title>
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet"  href="calculate.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <script src="Home.js"></script>
</head>
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
    <div class="calculator-container">
    <div class="cal_heading">
      <h2>Discover your personalized nutrition plan! <br>Use our easy-to-use form to calculate<br> your protein and calorie <br>intake based on your age, weight, and height.</h2>
      <div>
    <h3>Your protein intake should be :</h3>
    <p id="protein">am</p>
<h3>Your Calorie intake should be :</h3>
<p id="calorie">kcal</p>
</div>
</div>
<div class="calculate">
    <form id="calculater">
      
     <label for="age">Enter your Age</label>
     <input type="number" id="age" name="age" required><br><br>

     <label for="Height">Enter your Height</label>
     <input type="number" id="Height" name="Height" required placeholder="cm"><br><br>

     <label for="Weight">Enter your Weight</label>
     <input type="number" id="Weight" name="Weight" max="300" required placeholder="kg"><br><br>
<Center>
  <label for="gender">Enter your Gender</label>
   <select id="gender" name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select><br><br>
  <label  for="calculate">Calculate</label>
  <input type="submit" name="calculate" required><br>

    </Center></form>
  </div>
</div>
  <script>
    const calculater = document.getElementById("calculater");
    calculater.addEventListener("submit", function(event) {
      var age=document.getElementById("age").value;
      var Weight=document.getElementById("Weight").value;
      var Height=document.getElementById("Height").value;
      var gender=document.getElementById("gender").value;
      var proteinIntake ;
      var calorieIntake;
      if (gender === "male") {
       proteinIntake = 1.84 *Weight;

       calorieIntake=10 * Weight + 6.25 * Height - (5 * age )+ 5;
       } else if (gender === "female") {
     proteinIntake = 1.65*Weight;
     calorieIntake=10 * Weight + 6.25 * Height - (5 * age )- 161;
     
     console.log("You selected Female");
  } else {
    console.log("You did not select a gender");
  }
      document.getElementById('protein').innerHTML=proteinIntake ;
      document.getElementById('calorie').innerHTML=calorieIntake ;
      event.preventDefault();
    });
  </script>
</body>
</html>