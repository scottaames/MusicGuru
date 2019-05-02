function login () {
  // APPEND FORM DATA
  var data = new FormData();
  data.append('req', 'in');
  data.append('email', document.getElementById("login-email").value);
  data.append('password', document.getElementById("login-password").value);

  // INIT AJAX
  var xhr = new XMLHttpRequest();
  xhr.open('POST', "2c-ajax-login.php", true);

  // WHEN THE PROCESS IS COMPLETE
  xhr.onload = function () {
    if (xhr.status==404 || xhr.status==403) {
      alert("ERROR LOADING PAGE!");
    } else {
      if (this.response=="OK") {
        window.location.href = "Profile.html";
      } else {
        alert("Invalid email/password");
      }
    }
  };

  // SEND
  xhr.send(data);
  return false;
}

function logout () {
  // APPEND FORM DATA
  var data = new FormData();
  data.append('req', 'out');

  // INIT AJAX
  var xhr = new XMLHttpRequest();
  xhr.open('POST', "2c-ajax-login.php", true);

  // WHEN THE PROCESS IS COMPLETE
  xhr.onload = function () {
    if (xhr.status==404 || xhr.status==403) {
      alert("ERROR LOADING PAGE!");
    } else {
      if (this.response=="OK") {
        window.location.href = "login.php";
      } else {
        alert("Error signing out");
      }
    }
  };

  // SEND
  xhr.send(data);
}
