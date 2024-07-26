<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magnesium</title>
    <style>
        body {
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .card_1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 60%;
            height: auto;
            margin: 20px;
            padding: 20px;
            box-sizing: border-box;
        }

        .c img {
            border: solid 2px #A9A9A9;
            border-radius: 10px;
            width: 80%;
            margin: 20px ;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .c img:hover {
            transform: scale(1.05);
        }

        .card_1 h1 {
            margin: 20px 0;
            font-size: 24px;
            line-height: 1.4;
            color: #333;
            text-align: center;
        }

        .card_1 h2 {
            margin: 10px 0 20px;
            font-size: 22px;
            color: #666;
        }

        .buy-now-btn {
            background-color: #ff6600;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        .buy-now-btn:hover {
            background-color: #e65c00;
        }
    </style>
</head>
<body>
    <div class="card_1">
        <div class="c">
            <img src="q1.jpg" alt="q1">
        </div>
        <h1>Pharmeasy Calcium Magnesium Vitamin D3 & Zinc - <br>Bones & Dental Health - Bottle 60</h1>
        <h2>₹599</h2>
        <button class="buy-now-btn">Buy Now</button>
    </div>
</body>
</html>
