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
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }
        input[type="number"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1.1rem;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        .dish-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .dish-item {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1.1rem;
            box-sizing: border-box;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 0 5px;
        }
        .dish-item:hover {
            background-color: #f5f5f5;
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
        .button:hover {
            background-color: #45a049;
        }
        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding: 10px;
            width: 50%;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path d='M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z'/></svg>");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 12px;
            font-size: 1.1rem;
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
            background-color: #434dcf;
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
            float: left;
        }
        .dish-item input[type="number"]::-webkit-inner-spin-button,
        .dish-item input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        select#monan {
            width: 100%;
        }
        button#addDishField {
            display: block;
            width: 0;
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
        {!! Form::open(['method' => 'POST', 'route' => 'step_3.tempor']) !!}
        <div id="dish-template">
            <div class="dish-container">
                <div id="dish-1" class="dish-item">
                    {!! Form::label('monan', 'Please Select a dish:') !!}
                    {!! Form::select('monan', $dish, null, ['class' => 'form-control']) !!}
                </div>
                <div id="dish-1" class="dish-item">
                    {!! Form::label('number_monan', 'Please Enter Number of people:') !!}
                    {!! Form::number('number_monan', 1) !!}
                </div>
            </div>
        </div>
        <div id="additionalDishFields"></div>
        {{-- <button type="button" id="addDishField">+</button> --}}
        <div class="button-row">
            <button type="button" id="backButton" onclick="window.history.back();">Back</button>
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>
        {{ Form::close() }}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        var dishCount = 0;

        $('#addDishField').click(function(){
            dishCount++;
            var template = $('#dish-template').html();
            var newTemplate = template.replace(/monan/g, 'monan' + dishCount);
            var newTemplateNumber = template.replace(/number_monan/g, 'number_monan' + dishCount);

            $('#additionalDishFields').append(newTemplate);
        });
    });
    </script>
</body>
</html>