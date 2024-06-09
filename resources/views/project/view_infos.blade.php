<!DOCTYPE html>
<html lang="en">
    <style type="text/css">
        .table_design
        {
          text-align: center;
          margin: auto;
          border: 2px solid yellowgreen;
          margin-top: 50px;
          width: 1000px;
        }
        .div_design
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }
        th
        {
          background-color: skyblue;
          padding: 15px;
          font-size: 20px;
          font-weight: bold;
          color: white;
        }
        td
        {
          padding:10px;
          border: 1px solid skyblue;
        }
        
      </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2 style="">User Infos:</h2>
            <div>
                <table class="table_design">
                  <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Weight(kg)</th>
                    <th>Height(m)</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($info as $i)
                  <tr>
                    <td>{{$i->name}}</td>
                    <td>{{$i->age}}</td>
                    <td>{{$i->weight}}</td>
                    <td>{{$i->height}}</td>
                    <td><a class="btn btn-success" href="{{url('show_bmi', $i->id)}}">Find your BMI</a></td>
                  </tr>
                  @endforeach
                </table>
              </div>
</body>
</html>