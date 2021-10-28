<html>
    <head>
    <style>
        *{
            background: skyblue;
            text-align:center;
        }
        input,button{
            margin-left:35%;
        }
        p,input{
            display:inline-block;
            width: 20%;
        }
        form{
            margin-left:30%;
            padding:5px 10px;
            width: 40%;
            text-align:center;
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
    </head>
    <body><div>
    <div>
        <div">

            @if (session('status'))
                <h6>{{ session('status') }}</h6>
            @endif

            <div>
                <h4>
                <div>
                    Edit & Update Student
                    </h4>
                </div>
                <div>

                    <form action="{{ url('update-student/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                        <p>Name</p>
                        <input type="text" name="name" placeholder="Username" />
                        </div>
                        <div>
                        <p>Password</p>
                        <input type="password" name="password" placeholder="Password"/>
                        </div>
                        <button type="submit">Update Student</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div></body></html>