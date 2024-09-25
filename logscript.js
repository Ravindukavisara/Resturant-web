function validateLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var errorMessage = document.getElementById("errorMessage");
  
    // For simplicity, let's check if both fields are filled with any content
    if (username !== "" && password !== "") {
      errorMessage.innerText = ""; // Clear previous error message
      alert("Login successful! Redirecting..."); //  actual login logic
    } else {
      errorMessage.innerText = "Username and password are required.";
    }
  }
  