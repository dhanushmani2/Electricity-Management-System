<?php include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $conn->prepare("UPDATE customers SET name=?, address=?, contact=? WHERE customer_id=?");
    $stmt->bind_param("sssi", $_POST['name'], $_POST['address'], $_POST['contact'], $id);
    $stmt->execute();
    echo "Customer updated successfully. <a href='view_customers.php'>Back to Customer List</a>";
    exit();
}

$result = $conn->query("SELECT * FROM customers WHERE customer_id=$id");
$row = $result->fetch_assoc();
?>

<h2>Update Customer</h2>
<form method="POST">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>" required><br>
    Address: <input type="text" name="address" value="<?= $row['address'] ?>" required><br>
    Contact: <input type="text" name="contact" value="<?= $row['contact'] ?>" required><br>
    <input type="submit" value="Update Customer">
</form>
