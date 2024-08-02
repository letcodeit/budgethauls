let bookBtn = document.querySelectorAll("#bookBtn");
let confirmBookBtn = document.querySelectorAll("#confirmBookBtn");

bookBtn.forEach((button) => {
  button.addEventListener("click", () => {
    const parcel_id = button.getAttribute("data-value");
    Swal.fire({
      position: "center",
      icon: "info",
      title: "Accept Parcel?",
      text: "Are you sure you want to accept item for booking?",
      showConfirmButton: true,
      showCancelButton: true,
      confirmButtonText: "Yes, Accept",
    }).then((result) => {
      if (result.isConfirmed) {
        let xhr = new XMLHttpRequest();
        xhr.open(
          "GET",
          "../Controller/bookParcelQuery.php?id=" + parcel_id,
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
                    window.location.reload();
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

confirmBookBtn.forEach((button) => {
  button.addEventListener("click", () => {
    const listing_id = button.getAttribute("data-value");
    const transporter_id = button.value;
    Swal.fire({
      position: "center",
      icon: "info",
      title: "Approve Booking?",
      text: "Are you sure you want to accept this booking request?",
      showConfirmButton: true,
      showCancelButton: true,
      confirmButtonText: "Yes, Accept",
    }).then((result) => {
      if (result.isConfirmed) {
        let xhr = new XMLHttpRequest();
        xhr.open(
          "GET",
          "../Controller/approveBookingQuery.php?id=" +
            listing_id +
            "&t_id=" +
            transporter_id,
          true
        );
        xhr.onload = () => {
          if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
              let data = JSON.parse(xhr.response);
              if (data.status == "success") {
                // refreshDiv();
                Swal.fire({
                  title: "Success",
                  text: data.message,
                  icon: "success",
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = "?listing=booked";
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
