document.querySelector(".push").onclick = function () {
  if (document.querySelector("#login").value) {
    console.log("Login: " + document.querySelector(".login").value);
  } else {
    alert("Введите логин");
  }
  if (document.querySelector(".password").value) {
    console.log("Pass: " + document.querySelector(".password").value);
  } else {
    alert("Введите пароль");
  }
};
