<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .container {
            width: 500px;
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .step {
            margin-bottom: 15px;
        }

        .step label {
            display: block;
            margin-bottom: 5px;
        }

        .step select,
        .step input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1.1rem;
        }

        .step input[type="number"]::-webkit-inner-spin-button,
        .step input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .button-row {
            /* display: flex; */
            /* justify-content: space-between; */
        }

        .review h3 {
            margin-top: 0;
        }

        .review p {
            margin-bottom: 0;
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
    <title>Step Form</title>
</head>
<body>
    <?php if(isset($error)) { ?>
        <div style="color: red;"><?php echo $error; ?></div>
    <?php } ?>
    <div class="container">
        {!! Form::open(['method' => 'POST', 'route' => 'step_1.tempor']) !!}
        <div id="step1" class="step">
            {!! Form::label('meal', 'Please Select a meal:') !!}
            {!! Form::select('meal', [ 'breakfast'=>'Breakfast', 'lunch'=>'Lunch', 'dinner'=>'Dinner']) !!}
        </div>
        <div id="step2" class="step">
            {!! Form::label('people', 'Please Enter Number of people:') !!}
            {!! Form::number('people', 1, ['required' => 'required']) !!}
        </div>
        <div class="button-row">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</body>
</html>

