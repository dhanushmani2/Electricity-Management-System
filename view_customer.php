<?php include 'db.php'; ?>
<h2>Customer List</h2>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Address</th><th>Contact</th><th>Actions</th></tr>
<?php
$result = $conn->query("SELECT * FROM customers");
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['customer_id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['address']}</td>
            <td>{$row['contact']}</td>
            <td>
                <a href='update_customer.php?id={$row['customer_id']}'>Edit</a> | 
                <a href='delete_customer.php?id={$row['customer_id']}' onclick=\"return confirm('Are you sure you want to delete this customer?');\">Delete</a>
            </td>
          </tr>";
}
?>
</table>
