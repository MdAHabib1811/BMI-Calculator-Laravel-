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
    <h2 style="">{{$info->name}}'s Infos:</h2>
            <div>
                <table class="table_design">
                  <tr>
                    <th>Name</th>
                    <td>{{$info->name}}</td>  
                  </tr>
                  <tr>
                    <th>Age</th>
                    <td>{{$info->age}}</td>  
                  </tr>
                  <tr>
                    <th>Weight</th>
                    <td>{{$info->weight}}</td>  
                  </tr>
                  <tr>
                    <th>Height</th>
                    <td>{{$info->height}}</td>  
                  </tr>
                  <tr>
                    <th>{{$info->name}}'s BMI</th>
                    <td>
                        {{ number_format($info->weight / ($info->height * $info->height), 2) }}
                    </td> 
                  </tr>
                  
                </table>
              </div>
</body>
</html>