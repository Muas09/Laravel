<!DOCTYPE html>
<html>
<head>
    <title>Tính tổng hai số</title>
</head>
<body>
    <form method="post" action="/tinh-tong">
        @csrf
        <label for="a">Nhập số A:</label>
        <input type="text" id="a" name="a"><br>

        <label for="b">Nhập số B:</label>
        <input type="text" id="b" name="b"><br>

        <button type="submit">Tính tổng</button>
    </form>

    @if(isset($tong))
        <p>Tổng hai số là: {{$tong}}</p>
    @endif
</body>
</html>
