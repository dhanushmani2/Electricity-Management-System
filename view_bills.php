<?php include 'db.php'; ?>
<h2>Bill Records</h2>
<table border="1">
<tr><th>Bill ID</th><th>Customer</th><th>Units</th><th>Amount</th><th>Date</th></tr>
<?php
$sql = "SELECT b.bill_id, c.name, b.units, b.amount, b.bill_date 
        FROM bills b JOIN customers c ON b.customer_id = c.customer_id";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['bill_id']}</td><td>{$row['name']}</td><td>{$row['units']}</td><td>{$row['amount']}</td><td>{$row['bill_date']}</td></tr>";
}
?>
</table>
