<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ Sáng Tạo</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #ff7e5f, #feb47b, #ff9a76);
            height: 100vh;
            color: #fff;
            overflow-x: hidden;
        }
        .container {
            text-align: center;
            padding: 50px;
            max-width: 900px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(5px);
        }
        h1 {
            font-size: 3em;
            color: #ffeb3b;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            animation: fadeIn 2s ease-in-out;
        }
        p {
            font-size: 1.2em;
            color: #fffde7;
            margin: 20px 0;
        }
        .btn {
            padding: 12px 30px;
            font-size: 1.1em;
            color: #fff;
            background: linear-gradient(45deg, #4caf50, #81c784);
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .btn:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(76, 175, 80, 0.7);
        }
        .date {
            font-style: italic;
            color: #e0e0e0;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chào mừng đến với Trang chủ Sáng Tạo!</h1>
        <p>Khám phá thế giới sản phẩm đầy màu sắc tại đây. Hãy thêm sản phẩm mới hoặc xem danh sách hiện có!</p>
        <p class="date">Thời gian hiện tại: 04:07 PM +07, Thứ Tư, 14/05/2025</p>
        <button class="btn" onclick="alert('Chuyển đến danh sách sản phẩm!')">Xem Danh sách</button>
    </div>
</body>
</html>