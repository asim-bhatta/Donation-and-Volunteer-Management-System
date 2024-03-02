<?php
$conn = mysqli_connect('localhost', 'root', '', 'donation_db');

if (isset($_REQUEST['oid']) && isset($_REQUEST['amt']) && isset($_REQUEST['refId'])) {
    // Fetch payment details from the request
    $order_id = $_REQUEST['oid'];
    $amount = $_REQUEST['amt'];
    $ref_id = $_REQUEST['refId'];

    // Prepare and execute the INSERT statement
    $sql = "INSERT INTO payment (id, amount, Payment_method, date)
        VALUES (?, ?, 'eSewa', NOW())";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind variables
        $stmt->bind_param('ds', $order_id, $amount);
        $result = $stmt->execute();

        if ($result) {
            // Redirect to a success page or display a success message
            header('Location: ../../paymentsuccessful.php');
            exit(); // Make sure to exit after redirection
        } else {
            echo "Error executing statement: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
} else {
    // Invalid payment details
    header('Location: failure.php');
}
?>



