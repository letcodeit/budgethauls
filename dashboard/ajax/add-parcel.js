let parcelForm = document.getElementById("parcelForm");

parcelForm.addEventListener("submit", function (event) {
  event.preventDefault();
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../Controller/addParcelQuery.php", true);
  xhr.onload = () => {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      if (xhr.status == 200) {
        let data = JSON.parse(xhr.response);
        if (data.status == "success") {
          setTimeout(function () {
            window.location.href = "../stripe/checkout.php";
          }, 2000);
          Swal.fire({
            position: "center",
            icon: "success",
            title: "Item Listed",
            text: data.message,
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
          timer: 1500,
        });
      }
    }
  };
  let formData = new FormData(parcelForm);
  xhr.send(formData);
});
