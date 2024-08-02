let signUpForm = document.getElementById("signupAuth");
let signUpBtn = document.getElementById("signUpBtn");
let passLbl = document.getElementById("matchPAss");

signUpForm.addEventListener("submit", function (event) {
  event.preventDefault();
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../Controller/signupQuery.php", true);
  xhr.onload = () => {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      if (xhr.status == 200) {
        let data = JSON.parse(xhr.response);
        if (data.status == "success") {
          setTimeout(function () {
            window.location.href = "auth-login";
          }, 2000);
          Swal.fire({
            position: "center",
            icon: "success",
            title: "Registered",
            text: "User Registration Successful",
            showConfirmButton: false,
            timer: 2000,
          });
        } else if (data.status == "PassError") {
          // passLbl.classList.remove("hide-me");
          Swal.fire({
            position: "center",
            icon: "warning",
            title: "Password Error",
            text: data.message,
            showConfirmButton: false,
            confirmButtonColor: "#011346",
            timer: 1500,
          });
        } else if (data.status == "error") {
          Swal.fire({
            position: "center",
            icon: "warning",
            title: "Failed",
            text: data.message,
            showConfirmButton: false,
            confirmButtonColor: "#011346",
            timer: 2000,
          });
        }
      } else {
        Swal.fire({
          position: "center",
          icon: "warning",
          title: "Failed",
          text: data.message,
          showConfirmButton: false,
          confirmButtonColor: "#011346",
          timer: 1500,
        });
      }
    }
  };
  let formData = new FormData(signUpForm);
  xhr.send(formData);
});
