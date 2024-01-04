<html>

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet"></head>

</head>

<body>
    <div>
        <h1>แม่สูตรคูณ</h1>
        <form method ="post" action ="/my-display65160236">
            @csrf
            <label for="NumberInput">ป้อนตัวเลข:</label>
            <input type ="number" name ="myinputnumber">
            <button type ="submit">แสดง</button>
        </form>
    </div>
    <style>
        input[type="submit"] {
            padding: 8px;
            cursor: pointer;
            background-color: #a6a9a6;
            color: #ffffff;
            border: none;
            border-radius: 5px
        }

        form {
            margin-bottom: 40px;
        }

        body {
            background : url('https://png.pngtree.com/thumb_back/fw800/background/20230527/pngtree-trees-in-a-pink-scene-image_2676099.jpg');
            background-size: cover;
            display : flex;
            justify-content: center;
            font-family: 'Itim', cursive;

        }

        h1 {
            font-family: 'Itim', cursive;
            font-size: 70px;
            color: #000000
        }
        form {
            margin-bottom: 50px;
            text-align: center;
        }

        label {
            display: block;
            font-size: 30px;
            color: #030303
        }

        input[type="number"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 8px;
            cursor: pointer;
            background-color: #32ba32;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-family: 'Itim', cursive;
            font-size: 15px;
        }
        .mal{
            display: flex;
            gap: 20px;
            align-items: center;
        }

    </style>
</body>

</html>
