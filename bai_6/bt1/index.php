<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
        let number = prompt("Nhập số cần kiểm tra");
        function checkEvent(n) {
            if (n < 2)
                return false;
            else if (n == 2)
                return true;
            else {
                for (let i = 2; i < n; i++) {
                    if (n % i == 0){ return false
                    };
                }
            }
            return true;
        }
        if (checkEvent(number))
            alert(`${number} là số nguyên tố `);
        else
            alert(`${number} không là số nguyên tố`);
    </script>
</body>
</html>