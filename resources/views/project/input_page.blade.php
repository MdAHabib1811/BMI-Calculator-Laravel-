<!DOCTYPE html>
<html lang="en">
    <style type="text/css">
        .div_design
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }
        h2
        {
            color: white;
        }
        label
        {
            display: inline-block;
            width: 200px;
            font-size: 18px!important;
        }
        input[type='text']
        {
            width:200px;
            height: 50px;
        }
        .box
        {
            padding: 5px;
            width: 600px;
        }
        </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Please input your infos:</h1>
    <div class="div_design">
        <form action="{{url('add_info')}}" method="post">
            @csrf
            <div class="box">
                <label for="">Your Name:</label>
                <input type="text" name="name" required>
            </div>
            <div class="box">
                <label for="">Your Age:</label>
                <input type="number" name="age" required>
            </div>
            <div class="box">
                <label for="">Your Weight(kg):</label>
                <input type="number" step="0.000001" name="weight" required>
            </div>
            <div class="box">
                <label for="">Your Height(m):</label>
                <input type="number" step="0.000001" name="height" required>
            </div>
            <div class="box">
                <input class="btn btn-success" type="submit" value="Submit Data">
                <button><a href="{{url('view_infos')}}">View the data</a></button>
            </div>
        </form>
        
    </div>
</body>
</html>