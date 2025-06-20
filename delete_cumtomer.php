<?php
include 'db.php';

$id = $_GET['id'];

// Optional: Delete associated bills first if needed
$conn->query("DELETE FROM bills WHERE customer_id = $id");

$conn->query("DELETE FROM customers WHERE customer_id = $id");

echo "Customer deleted successfully. <a href='view_customers.php'>Back to Customer List</a>";
?>
