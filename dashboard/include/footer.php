<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>
<script src="assets/js/script.js"></script>

<!-- pdf  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
</body>

</html>

<script>
  var fromAddress = "fromAddress";
  var toAddress = "toAddress";

  $(document).ready(function() {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete(
      document.getElementById(fromAddress), {
        types: ["geocode"],
      }
    );

    google.maps.event.addListener(autocomplete, "place_changed", function() {
      var near_place = autocomplete.getPlace();
    });
  });

  $(document).ready(function() {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete(
      document.getElementById(toAddress), {
        types: ["geocode"],
      }
    );

    google.maps.event.addListener(autocomplete, "place_changed", function() {
      var near_place = autocomplete.getPlace();
    });
  });
</script>