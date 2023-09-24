
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
      description.textContent = "This is the living room description.";
    } else if (value === "bedroom") {
      description.textContent = "This is the bedroom description.";
    } else if (value === "kitchen") {
      description.textContent = "This is the kitchen description.";
    }
  });
});
const paragraph = document.getElementById("my-paragraph");
