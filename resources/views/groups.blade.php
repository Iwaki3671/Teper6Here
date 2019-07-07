<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/6db2820d4a.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <table class="table table-sm">
        <thead>
            <th>Группа</th>
            <th>Описание</th>
            <th>Общая оценка по русскому</th>
            <th>Общая оценка по истории</th>
            <th>Общая оценка по литературе</th>
        </thead>
        <tbody>
            <tr>
                @foreach ( $groups as $group )
                <tr>
                <td><div class="body"> {{ $group->title }}</div></td>
                <td><div class="body">{{ $group->description }}</div></td>
                <td><div class="body">{{ $group->average_math }}</div></td>
                <td><div class="body">{{ $group->average_history }}</div></td>
                <td><div class="body">{{ $group->average_literature }}</div></td>
                <td> 
                <form action="{{ route('groups.show',$group) }}" method="GET">
                    @csrf
                    <button type= "submit" class="btn btn-primary">
                        <i class="fa fa-cogs">Ред</i>
                    </button>
                </td>
                <td> 
                    <form action="" method="post">
                        @csrf
                        @method('DELETE')
                        <button type= "submit" class="btn btn-danger">
                            <i class="fa fa-broom">Delete</i>
                        </button>
                    </td>
                    <td> 
                        <form action="" method="post">
                            @csrf
                            @method('DELETE')
                            <button type= "submit" class="btn btn-danger">
                                <i class="fa fa-fist-raised">Add</i>
                            </button>
                        </td>
            </tr>
                @endforeach
            </tr>
        </tbody>
    </table>
</body>
</html>
