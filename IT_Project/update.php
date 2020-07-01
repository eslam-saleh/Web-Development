<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Update Phone</title>
    <link rel="stylesheet" type="text/css" href="operations.css">
</head>

<body>
    <div class="head"></div>
    <div class="frm">
        <div class="san">
            <h3 style="text-decoration:underline;">Update Phone</h3>
            <form name="insert" method="post" action="">
                <label>Phone Market :</label>
                <input type="text" name="market" style="margin-left:75px;" class="txt"><br><br>
                <label>Phone Name :</label>
                <input type="text" name="name" style="margin-left:108px;" class="txt"><br><br>
                <label>Phone Price :</label>
                <input type="text" name="price" style="margin-left:85px;" class="txt"><br><br>
                <label>Phone #Likes :</label>
                <input type="text" name="likes" style="margin-left:142px;" class="txt"><br><br>
                <input type="submit" name="submit" value="Update" class="sub">
                <?php
if (isset($_POST['submit'])) {
    $conn = mysqli_connect("localhost", "root", "12345678", "mobilano");
    if (mysqli_connect_error()) {
        echo ("error");
        die("failed to connext to db" . mysql_error());
    } else {
        $name   = $_POST['name'];
        $market = $_POST['market'];
        $price  = $_POST['price'];
        $likes  = $_POST['likes'];
        $conn->query("UPDATE phone SET market='$market' , price='$price' , likes='$likes' WHERE name='$name'");
        echo "<script> alert('Update Success')</script>";
        
    }
}
?>


            </form>
            <br><br>
            <table border="1" cellpadding="10" width="750">

                <?php
$conn = mysqli_connect("localhost", "root", "12345678", "mobilano");
if (mysqli_connect_error()) {
    echo ("error");
    die("failed to connext to db" . mysql_error());
} else {
    
    $result = mysqli_query($conn, "SELECT * FROM phone");
    
    echo "<table border='1'>
<tr>
<th>name</th>
<th>market</th>
<th>price</th>
<th>likes</th>
</tr>";
    
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['market'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['likes'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    mysqli_close($con);
}
?>
            </table>
        </div>
    </div>
</body>

</html>
