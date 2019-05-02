function register() {
  // APPEND FORM DATA
  var data = new FormData();
  data.append('name', document.getElementById("user_name").value);
  data.append('email', document.getElementById("user_email").value);
  data.append('password', document.getElementById("user_password").value);
  data.append('cpassword', document.getElementById("user_cpassword").value);

  // INIT AJAX
  var xhr = new XMLHttpRequest();
  xhr.open('POST', "3c-ajax-register.php", true);

  // WHEN THE PROCESS IS COMPLETE
  xhr.onload = function () {
    if (xhr.status == 404 || xhr.status == 403) {
      alert("Error loading file!");
    } else {
      var res = JSON.parse(this.response);
      if (res['status']) {
        // REGISTER OK - REDIRECT
        window.location.href = "2d-more.html";
      } else {
        // REGISTER FAIL
        alert(res['message']);
      }
    }
  };

  // SEND
  xhr.send(data);
  return false;
}