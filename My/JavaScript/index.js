var a = "Hello bruh you in js";

function hello() {
  console.log(a);
}

hello();
let hidie = document.querySelector("#Hide");
let showie = document.querySelector("#buttone");

function hide() {
  let def = document.querySelector(".divchic");
  def.hidden = true;
}
function show() {
  let def = document.querySelector(".divchic");
  def.style.display = "block";
}

let c = 5;

let b = 13;
let d = "13";
if (c == b) {
  console.log("Yes");
}
if (d === b) {
  console.log("watafaka");
} else {
  console.log("No");
}

let l = Math.random();
console.log("Получил случайное дробное от 0 до 1:  " + l);
l = l * 10;
console.log("Умножил на 10:  " + l);
l = Math.round(l);
console.log("Округил: " + l);

let uspole = document.querySelector("#user-num");
document.querySelector("#user-button").onclick = checkNum;

function test() {
  for (let a = 0; a < 10; a++) {
    console.log(a);
  }
}

function checkNum() {
  let num = uspole.value;
  console.log(num);
  if (num == l) {
    alert("Succsesful");
  } else {
    console.log("No");
  }
}
document.querySelector(".push").onclick = function () {
  if (document.querySelector(".login").value) {
    console.log("Login: " + document.querySelector(".login").value);
  } else {
    alert("Введите логин");
  }
  if (document.querySelector(".password").value) {
    console.log("Pass: " + document.querySelector(".password").value);
  } else {
    alert("Введите пароль");
  }
  if (document.querySelector(".date-input").value) {
    console.log("Date: " + document.querySelector(".date-input").value);
  } else {
    alert("Введите дату");
  }
};
