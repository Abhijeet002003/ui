<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post" style="max-width:400px;margin:40px auto;padding:20px;border:1px solid #d4e117ff;border-radius:8px;background:#f9f9f9;">
    <label for="name" style="display:block;margin-bottom:8px;font-weight:bold;">Name:</label>
    <input type="text" id="name" name="name" required style="width:100%;padding:8px;margin-bottom:16px;border:1px solid #ccc;border-radius:4px;">
    <label for="email" style="display:block;margin-bottom:8px;font-weight:bold;">Email:</label>
    <input type="email" id="email" name="email" required style="width:100%;padding:8px;margin-bottom:16px;border:1px solid #ccc;border-radius:4px;">
    <label for="Address" style="display:block;margin-bottom:8px;font-weight:bold;">Address:</label>
    <input type="Address" id="Address" name="Address" required style="width:100%;padding:8px;margin-bottom:16px;border:1px solid #ccc;border-radius:4px;">
    <input type="submit" value="Submit" style="background:#007bff;color:#fff;padding:10px 20px;border:none;border-radius:4px;cursor:pointer;">
</form>
</body>
</html>

<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $Address=$_POST['Address'];
    $stmt=$conn->prepare("INSERT INTO users (name, email, Address) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $Address);
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>