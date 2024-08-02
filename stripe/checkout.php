<?php
session_start();
if (isset($_GET['success'])) {
  $reference = $_GET['success'];
  $verify = $_SESSION['itemData']['verify'];
  if ($verify == $reference) {
    include_once("../App/init.php");
    $data = [
      'payment_status' => 1
    ];
    $query = $parcel->update($data, 'id =' . $_SESSION['itemData']['last_id']);
    if ($query) {
      unset($_SESSION['itemData']);
      header('Location:../dashboard/?listing=pending');
    }
  } else {
    $_SESSION['message'] = 'Invalid reference number';
    header('Location:../dashboard/?page=home');
  }
} else {
  require __DIR__ . "/vendor/autoload.php";

  $stripe_secret_key = "sk_test_51PhyTGDaxcBFyqP1SsWMhMQ8bUWJJ1h2Xq8lyvGdXhEmAb2UmvPBYeEPytzwdBvBMPk2Uva143LhjM2WtueTjVCS00etVPWxxF";

  \Stripe\Stripe::setApiKey($stripe_secret_key);

  $checkout_session = \Stripe\Checkout\Session::create(
    [
      "mode" => "payment",
      "success_url" => "https://budgethauls.nhyirasolutions.com/stripe/checkout.php?success=" . $_SESSION['itemData']['verify'],
      "cancel_url" => "https://budgethauls.nhyirasolutions.com/dashboard/?page=home",
      "locale" => "en",
      "line_items" => [
        [
          "quantity" => 1,
          "price_data" => [
            "currency" => "usd",
            "unit_amount" => intval($_SESSION['itemData']['budget']) * 100,
            "product_data" => [
              "name" => 'Listing for ' . $_SESSION['itemData']['name']
            ]
          ]
        ]
      ]
    ]
  );

  http_response_code(303);
  header("Location: " . $checkout_session->url);
}
