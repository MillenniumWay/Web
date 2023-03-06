document.querySelector("#signup-submit").onclick = function (event) {
  event.preventDefault();
  let login = document.querySelector("#signup-login").value;
  let password = document.querySelector("#signup-password").value;
  let email = document.querySelector("#signup-email").value;

  let data = {
    "Login: ": login,
    "Password: ": password,
    "Email: ": email,
  };

  http_request("Core/SignUp.php", "POST", example, data);
  example(data);

  function example(result) {
    console.log(result);
  }
};
