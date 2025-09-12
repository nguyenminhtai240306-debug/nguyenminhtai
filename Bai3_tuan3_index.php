<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai3</title>
</head>
<body>
    <form action="info.php" method="get">
        <div>
            <label for="">Tên: </label>
            <input type="text" name="name">
            <label for="">Năm sinh: </label>
            <input type="number" name="age" min="1900" max="2025">
            <input type="submit" value="submit">
        </div>
    </form>
</body>
</html>
