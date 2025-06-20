<?php include 'db.php'; ?>
<form method="POST" action="">
    Name: <input type="text" name="name" required><br>
    Address: <input type="text" name="address" required><br>
    Contact: <input type="text" name="contact" required><br>
    <input type="submit" value="Add Customer">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("INSERT INTO customers (name, address, contact) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $_POST['name'], $_POST['address'], $_POST['contact']);
    $stmt->execute();
    echo "Customer added successfully!";
}
?>
