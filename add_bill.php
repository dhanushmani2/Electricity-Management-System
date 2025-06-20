<?php include 'db.php'; ?>
<form method="POST" action="">
    Customer ID: <input type="number" name="customer_id" required><br>
    Units: <input type="number" name="units" required><br>
    Amount: <input type="number" name="amount" step="0.01" required><br>
    Date: <input type="date" name="bill_date" required><br>
    <input type="submit" value="Add Bill">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("INSERT INTO bills (customer_id, units, amount, bill_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iids", $_POST['customer_id'], $_POST['units'], $_POST['amount'], $_POST['bill_date']);
    $stmt->execute();
    echo "Bill added successfully!";
}
?>
