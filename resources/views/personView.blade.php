<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/table.css">

    <!-- Style -->
    <link rel="stylesheet" href="/personView.css">

    <title>Person View Table</title>

    <script>
        function deleteRecord(id) {
            var remove = confirm('Are you sure to remove this record?');

            if (remove == true) {
                alert("Successful to remove !")
                window.location.href = "remove?id=" + id;
            } else {
                alert("Remove is cancelled !")
            }

            window.location.href = "personView";
        }

        function updateRecord(id) {
            var update = confirm('Are you sure to update this record?');

            if (update == true) {
                var updateNum = prompt("Which record you would like to modify?\n1. NAME\n2. EMAIL");

                while (updateNum != 1 && updateNum != 2) {
                    alert("Invalid option");
                    updateNum = prompt("Which record you would like to modify?\n1. NAME\n2. EMAIL");
                }

                switch (updateNum) {
                    case '1':
                        updateNum = "name";
                        break;
                    case '2':
                        updateNum = "email";
                }

                var value = prompt("What values you would like to change to?");

                window.location.href = "update?id=" + id + "&option=" + updateNum + "&value=" + value;

                alert("Successful to update!")
            } else {
                alert("Update is cancelled !")
            }

            window.location.href = "personView";
        }
    </script>
</head>

<body>
    <div class="content">

        <div class="container">
            <h2 class="mb-5">Person</h2>

            <div class="table-responsive">

                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Registered Date</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tableView as $i)
                        <tr scope="row">

                            <td>
                                {{$i->id}}
                            </td>

                            <td><a href="#">{{$i->name}}</a></td>

                            <td>
                                {{$i->email}}
                                <small class="d-block">Far far away, behind the word mountains</small>
                            </td>

                            <td>{{$i->created_at}}</td>

                            <td><a onclick="updateRecord('{{$i->id}}')" class="more" style="cursor: pointer;">Update</a></td>
                            <td><a onclick="deleteRecord('{{$i->id}}')" class="more" style="cursor: pointer;">Remove</a></td>

                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="6" style="text-align:center;"><a href="form">Add People</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>

    </div>
</body>

</html>