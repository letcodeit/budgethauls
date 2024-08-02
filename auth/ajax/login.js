let loginForm = document.getElementById("loginAuth");
let loginBtn = document.getElementById("loginBtn");
let passLbl = document.getElementById("checkPass");

loginForm.addEventListener("submit", function (event) {
  event.preventDefault();
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../Controller/loginQuery.php", true);
  xhr.onload = () => {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      if (xhr.status == 200) {
        let data = JSON.parse(xhr.response);
        if (data.status == "success") {
          setTimeout(function () {
            window.location.href = "../dashboard";
          }, 2000);
          Swal.fire({
            position: "center",
            icon: "success",
            title: "Login Successful",
            text: "Redirecting to your dashboard ...",
            showConfirmButton: false,
            timer: 2000,
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
          timer: 2000,
        });
      }
    }
  };
  let formData = new FormData(loginForm);
  xhr.send(formData);
});
