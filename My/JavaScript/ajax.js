// XMLHTTPRequest
function http_request(url, method, functiomName, dataArray) {
  let xhttp = new XMLHttpRequest();
  xhttp.open(method, url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataArray);
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.readyState == 200) {
      functiomName(this);
    }
  };
}

function requestData(dataArr) {
  let out = "";
  for (let key in dataArr) {
    out += `${key}=${dataArr[key]}&`;
  }
  console.log(out);
  return out;
}
// http_request("Core/SignUp.php", "POST", sout, requestData(a));
