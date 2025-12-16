<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Shop Hoa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="header">
        <h1>tooi</h1>
        <p>mai lên làm như vậy nè nha ( thêm file code vô đây)</p>
       <p>xong git bash</p>
        <h4>Chuyên bán hoa tươi</h4>
        <h1>🌸 Cửa Hàng Hoa Tươi</h1>
    </div>

    <div class="container">

        <!-- CỘT BÊN TRÁI -->
        <div class="left">
            <h3>🌼 Danh mục</h3>
            <ul>
                <li>Hoa hồng</li>
                <li>Hoa cúc</li>
                <li>Hoa tulip</li>
                <li>Hoa sinh nhật</li>
            </ul>
        </div>

        <!-- CỘT BÊN PHẢI -->
        <div class="products">
            <?php
            $result = $conn->query("SELECT * FROM flowers");
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="product">
                    <img src="images/<?php echo $row['image']; ?>" alt="">
                    <h3><?php echo $row['name']; ?></h3>
                    <p><?php echo number_format($row['price']); ?> VNĐ</p>
                    <form method="post" action="add_to_cart.php">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit">Thêm vào giỏ</button>
                    </form>
                </div>
            <?php } ?>
        </div>

    </div>

</body>

</html>