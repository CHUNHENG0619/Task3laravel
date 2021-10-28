<html>
    <head>
    <style>
        *{
            background: skyblue;
        }
        h1{
            text-align:center;
        }
        table{

            margin-left:35%;
        }
        table, tr,th,td{
            padding:5px 10px;
            width: 33%;
            text-align:center;
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
    </head>
    <body>
    <div>
        <div>
            <h1> Record</h1>
        </div>
        <div>
            <table >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($student as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->password }}</td>
                    <td>
                        <a href="{{ url('edit-student/'.$item->id) }}">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete-student/'.$item->id) }}">Delete</a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>        
    </div>
</body></html>
