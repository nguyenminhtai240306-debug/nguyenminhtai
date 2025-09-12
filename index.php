<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai2</title>
    <style>
      *{
        margin-bottom: 10px;
      }
    </style>
</head>
<body>
    <h1>Nhập thông tin sinh viên</h1>
<form action="info.php" method="get">
  <div>
    <label for="">MSSV: </label>
    <input type="text" maxlength="10" name="mssv"> <br>
    <label for="">Họ tên: </label>
    <input type="text" name="hoten"> <br>
    <label for="">Giới tính:</label>
    Nam <input type="radio" name="gioitinh" value="0">
    Nữ <input type="radio" name="gioitinh" value="1">
    <br>
    <label for="">Ngôn ngữ lập trình:</label>
    C++ <input type="checkbox" name="lang[]" value="c">
    PHP <input type="checkbox" name="lang[]" value="php">
    <br>
    <label for="">Thành phố:</label>
    <select name="thanhpho">
    <option value="hcm">Hồ Chí Minh</option>
    <option value="hn">Hà Nội</option>
    <option value="dn">Đà Nẵng</option>
    </select>
    <br>
    <label for="">Tin nhắn: </label> <br>
    <textarea name="tinnhan" rows="5" cols="30"></textarea>
    <br>
    <input type="submit" value="Gửi">
  </div>
</form>
</body>
</html>