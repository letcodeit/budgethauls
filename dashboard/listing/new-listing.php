<?php
require '../App/init.php';
?>

<?php if (intval($user['type']) == 1 || (intval($user['type'])) == 2) $app->redirect('?page=home'); ?>

<div class="page-wrapper">
  <div class="content">
    <div class="page-header">
      <div class="page-title">
        <h4>Add New Listing</h4>
        <h6>New Listing for Booking</h6>
      </div>
    </div>
    <div class="card text-center hide-me" id="noticeDiv">
      <h4><strong>Total Distance: </strong><strong class="modifier" id="distanceDisplay"></strong></h4>
      <h4><strong>Suggested Budget:</strong> <strong class="modifier" id="budgetDisplay"></strong></h4>
      <p class="modifier pb-2">
        You can set a lower budget but you have to be flexible on the pickup and delivery dates to accommodate more transporters</p>
    </div>
    <div class="card">
      <form action="../Controller/addParcelQuery.php" method="POST" id="parcelForm">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="form-group">
                <label>Item Name </label>
                <div class="input-groupicon">
                  <input type="text" name="item_name" placeholder="E.g. Couch" required>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="form-group">
                <label>From Address</label>
                <input type="text" name="s_address" placeholder="E.g. Canada Water, UK" id="fromAddress" required>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="form-group">
                <label>To Address</label>
                <input type="text" name="r_address" placeholder="E.g. Chicago, IL, USA" id="toAddress" required>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 hide-me">
              <div class="form-group">
                <label>Distance</label>
                <input type="text" name="distance" id="distanceInput" value="">
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="form-group">
                <label>Quantity</label>
                <input type="text" name="quantity" placeholder="E.g. 3" id="quantity" required>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="form-group">
                <label>Your Contact No:</label>
                <input type="text" name="s_contact" placeholder="E.g. +1(202) 856 6889" id="s_contact" required>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12">
              <div class="form-group">
                <label>Receiver's Name</label>
                <input type="text" name="receiver" placeholder="E.g. Jane Doe" id="receiver" required>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12">
              <div class="form-group">
                <label>Receiver's Contact No:</label>
                <input type="text" name="r_contact" placeholder="Eg, +1(202) 856 6889" id="contact" required>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12">
              <div class="form-group">
                <label>Shipping Budget</label>
                <input type="text" name="budget" placeholder="E.g. $700" id="budget" required>
              </div>
            </div>

          </div>



          <!-- <div class="row">
          <div class="table-responsive ">
            <table class="table">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>QTY</th>
                  <th>Price</th>
                  <th>Stock </th>
                  <th>Discount</th>
                  <th>Tax </th>
                  <th>Total Cost ($)</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="bor-b1">
                  <td class="productimgname">
                    <a class="product-img">
                      <img src="assets/img/product/product7.jpg" alt="product">
                    </a>
                    <a href="javascript:void(0);">Apple Earpods</a>
                  </td>
                  <td>
                    <div class="input-group form-group mb-0">
                      <a class="scanner-set input-group-text">
                        <img src="assets/img/icons/plus1.svg" alt="img">
                      </a>
                      <input type="text" value="1" class="calc-no">
                      <a class="scanner-set input-group-text">
                        <img src="assets/img/icons/minus.svg" alt="img">
                      </a>
                    </div>
                  </td>
                  <td>1500.00</td>
                  <td>50.00</td>
                  <td>0.00</td>
                  <td>0.00</td>
                  <td>1500.00</td>
                  <td>
                    <a href="javascript:void(0);" class="delete-set"><img src="assets/img/icons/delete.svg" alt="svg"></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div> -->


          <!-- <div class="row">
          <div class="col-lg-12 float-md-right">
            <div class="total-order">
              <ul>
                <li>
                  <h4>Order Tax</h4>
                  <h5>$ 0.00 (0.00%)</h5>
                </li>
                <li>
                  <h4>Discount </h4>
                  <h5>$ 0.00</h5>
                </li>
                <li>
                  <h4>Shipping</h4>
                  <h5>$ 0.00</h5>
                </li>
                <li class="total">
                  <h4>Grand Total</h4>
                  <h5>$ 0.00</h5>
                </li>
              </ul>
            </div>
          </div>
        </div> -->


          <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="form-group">
                <label>Weight(lbs)</label>
                <input type="text" name="weight" placeholder="E.g, 50" required>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="form-group">
                <label>Height(in)</label>
                <input type="text" name="height" placeholder="E.g 24" required>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="form-group">
                <label>Length(in)</label>
                <input type="text" name="length" placeholder="E.g 12" required>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="form-group">
                <label>Width(in)</label>
                <input type="text" name="width" placeholder="E.g, 48" required>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label>Description or Note (if any)</label>
                <textarea class="form-control" name="note"></textarea>
              </div>
            </div>
            <div class="col-lg-12 text-center">
              <button class="btn btn-submit me-2" type="submit">Submit and Pay</button>
              <a href="?page=home" class="btn btn-cancel">Cancel</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="./ajax/add-parcel.js"></script>

<script>
  $(function() {
    // add input listeners
    google.maps.event.addDomListener(window, 'load', function() {
      var from_places = new google.maps.places.Autocomplete(document.getElementById('fromAddress'));
      var to_places = new google.maps.places.Autocomplete(document.getElementById('toAddress'));

      google.maps.event.addListener(from_places, 'place_changed', function() {
        var from_place = from_places.getPlace();
        var from_address = from_place.formatted_address;
        $('#fromAddress').val(from_address);
      });

      google.maps.event.addListener(to_places, 'place_changed', function() {
        var to_place = to_places.getPlace();
        var to_address = to_place.formatted_address;
        $('#toAddress').val(to_address);
      });
    });


    // calculate distance
    function calculateDistance() {
      var origin = $('#fromAddress').val();
      var destination = $('#toAddress').val();
      var service = new google.maps.DistanceMatrixService();
      service.getDistanceMatrix({
        origins: [origin],
        destinations: [destination],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
        // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
        avoidHighways: false,
        avoidTolls: false
      }, callback);
    }
    // get distance results
    function callback(response, status) {
      if (status != google.maps.DistanceMatrixStatus.OK) {
        $('#noticeDiv').html(err);
      } else {
        var origin = response.originAddresses[0];
        var destination = response.destinationAddresses[0];
        if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
          // $('#noticeDiv').html("Better get on a plane. There are no roads between " + origin + " and " + destination);
          // $('#noticeDiv').html("From " + origin + " to " + destination + " is a Flying Distance");
        } else {
          var distance = response.rows[0].elements[0].distance;
          var duration = response.rows[0].elements[0].duration;
          console.log(response.rows[0].elements[0].distance);
          // var distance_in_kilo = distance.value / 1000; // the kilom
          var distance_in_mile = distance.value / 1609.34; // the mile
          var duration_text = duration.text;
          var duration_value = duration.value;
          $("#noticeDiv").removeClass("hide-me");
          $('#distanceDisplay').text(distance_in_mile.toFixed(1) + ' Miles');
          $('#budgetDisplay').text('$' + distance_in_mile.toFixed(1));
          let distanceInput = document.getElementById('distanceInput');
          distanceInput.value = distance_in_mile.toFixed(1);
          // $('#in_kilo').text(distance_in_kilo.toFixed(2));
          // $('#duration_text').text(duration_text);
          // $('#duration_value').text(duration_value);
          // $('#from').text(origin);
          // $('#to').text(destination);
        }
      }
    }
    // print results on submit the form
    $('#quantity').change(function(e) {
      e.preventDefault();
      calculateDistance();
      setInterval(function() {
        calculateDistance();
      }, 2000);
    });


  });
</script>