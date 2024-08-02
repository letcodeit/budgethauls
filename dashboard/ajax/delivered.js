let deliveredBtn = document.querySelectorAll("#deliveredBtn");
let failedBtn = document.querySelectorAll("#failedBtn");

deliveredBtn.forEach((button) => {
  button.addEventListener("click", () => {
    const parcel_id = button.getAttribute("data-value");
    Swal.fire({
      position: "center",
      icon: "info",
      title: "Confirm delivery?",
      text: "Are you sure you have delivered this parcel?",
      showConfirmButton: true,
      showCancelButton: true,
      confirmButtonText: "Yes",
    }).then((result) => {
      if (result.isConfirmed) {
        let xhr = new XMLHttpRequest();
        xhr.open(
          "GET",
          "../Controller/deliveredParcelQuery.php?id=" + parcel_id,
          true
        );
        xhr.onload = () => {
          if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
              let data = JSON.parse(xhr.response);
              if (data.status == "success") {
                Swal.fire({
                  title: "Success",
                  text: data.message,
                  icon: "success",
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = "?parcel=delivered";
                  }
                });
              } else if (data.status == "error") {
                Swal.fire({
                  title: "Failed",
                  text: data.message,
                  icon: "warning",
                });
              }
            } else {
            }
          }
        };
        xhr.send();
      }
    });
  });
});

failedBtn.forEach((button) => {
  button.addEventListener("click", () => {
    const parcel_id = button.getAttribute("data-value");
    Swal.fire({
      position: "center",
      icon: "info",
      title: "Delivery Failed?",
      text: "Confirm Delivery Failure?",
      showConfirmButton: true,
      showCancelButton: true,
      confirmButtonText: "Yes",
    }).then((result) => {
      if (result.isConfirmed) {
        let xhr = new XMLHttpRequest();
        xhr.open(
          "GET",
          "../Controller/failedParcelQuery.php?id=" + parcel_id,
          true
        );
        xhr.onload = () => {
          if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
              let data = JSON.parse(xhr.response);
              if (data.status == "success") {
                Swal.fire({
                  title: "Success",
                  text: data.message,
                  icon: "success",
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = "?parcel=failed";
                  }
                });
              } else if (data.status == "error") {
                Swal.fire({
                  title: "Failed",
                  text: data.message,
                  icon: "warning",
                });
              }
            } else {
            }
          }
        };
        xhr.send();
      }
    });
  });
});
