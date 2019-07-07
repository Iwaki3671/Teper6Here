<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <table class="table table-sm">
        <thead>
            <th>ФИО студента</th>
            <th>Дата рождения студента</th>
            <th>Номер телефона студента</th>
            <th>Адрес проживания студента</th>
            <th>Фото студента</th>
        </thead>
    <tbody>
         <tr>
              @foreach ($students as $student )

             <tr>
             <td><div class="body">{{$student->name}}</div></td>
             <td><div class="body">{{$student->birthday}}</div></td>
             <td><div class="body">{{$student->phoneNumber}}</div></td>
             <td><div class="body">{{$student->address}}</div></td>
            </tr>
            @endforeach
         </tr>
    </tbody>
    </table>

</body>
</html>