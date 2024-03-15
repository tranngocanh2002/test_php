<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Servings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .container {
            text-align: center;
            width: 500px;
            background-color: white;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 30px;
        }
        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .label {
            font-size: 1.1rem;
            flex-basis: 150px;
        }
        .value {
            flex-grow: 1;
            text-align: right;
        }
        .dishes-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }
        .dishes-container h2 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }
        .dish-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
        }
        .dish-name {
            flex-basis: 150px;
        }
        .dish-quantity {
            flex-grow: 1;
            text-align: right;
        }
        .button {
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 45%;
        }

        button:hover {
            background-color: #45a049;
        }

        #backButton {
            background-color: #f44336;
        }
        input.btn.btn-primary {
            float: right;
            background: #45a049;
            width: 45%;
            color: white;
            border: none;
            height: 35px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        {!! Form::open(['method' => 'POST', 'route' => 'step_4.tempor']) !!}
        <div class="row">
            <div class="label">Meal</div>
            <div class="value">{{ session('meal') }}</div>
        </div>
        <div class="row">
            <div class="label">No. of People</div>
            <div class="value">{{ session('people') }}</div>
        </div>
        <div class="row">
            <div class="label">Restaurant</div>
            <div class="value">{{ session('restaurant') }}</div>
        </div>
        <div class="dishes-container">
            <h2>Dishes</h2>
            <div class="dish-item">
                <div class="dish-name">{{ session('monan') }}</div>
                <div class="dish-quantity">{{ session('number_monan') }}</div>
            </div>
            {{-- <div class="dish-item">
                <div class="dish-name">Dish 2</div>
                <div class="dish-quantity">1</div>
            </div>
            <div class="dish-item">
                <div class="dish-name">Dish 3</div>
                <div class="dish-quantity">1</div>
            </div> --}}
        </div>
        <div class="button-row">
            <button type="button" id="backButton" onclick="window.history.back();">Back</button>
            {{-- <button type="submit" id="nextButton">Order</button> --}}
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>

    </div>
</body>
</html>