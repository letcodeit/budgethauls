let deleteBtn = document.querySelectorAll("#deleteBtn");

deleteBtn.forEach((button) => {
  button.addEventListener("click", () => {
    const parcel_id = button.getAttribute("data-value");
    Swal.fire({
      position: "center",
      icon: "info",
      title: "Delete Item?",
      text: "Do you want to delete this listing?",
      showConfirmButton: true,
      showCancelButton: true,
      confirmButtonText: "Yes",
    }).then((result) => {
      if (result.isConfirmed) {
        let xhr = new XMLHttpRequest();
        xhr.open(
          "GET",
          "../Controller/deleteParcelQuery.php?id=" + parcel_id,
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
                    window.location.href = "?parcel=parcels";
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
