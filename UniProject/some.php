<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Hide/Show Description Button Example</title>
    <style>
      .description {
        display: none;
      }
    </style>
  </head>
  <body>
    <h1>Hide/Show Description Button Example</h1>
    <form>
        <label><input type="radio" name="room" value="living-room">Living Room</label>
        <label><input type="radio" name="room" value="bedroom">Bedroom</label>
        <label><input type="radio" name="room" value="kitchen">Kitchen</label>
    </form>
    <br>
    <button id="description-button">Choose an option to see the description</button>
    <p id="description" class="description">hello</p>
  
    <script>
      const button = document.querySelector("#description-button");
      const description = document.querySelector("#description");
      const radios = document.querySelectorAll("input[name='room']");

      button.addEventListener("click", () => {
        if (description.style.display === "none") {
          description.style.display = "block";
        } else {
          description.style.display = "none";
        }
      });

      radios.forEach((radio) => {
        radio.addEventListener("click", () => {
          const value = radio.value;
          if (value === "living-room") {
            description.textContent = "yes you did it";
          } else if (value === "bedroom") {
            description.textContent = "This is the bedroom description.";
          } else if (value === "kitchen") {
            description.textContent = "This is the kitchen description.";
          }
        });
      });
    </script>   
  </body>
</html>
