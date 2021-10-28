<h1><br>Update Records</br></h1>

<form action="/edit" method="POST">
@csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    Name:<input type="text" name="name" value="{{$data['name']}}"><br><br>
    Email:<input type="text" name="email" value="{{$data['email']}}"><br><br>
    Phone:<input type="text" name="phone" value="{{$data['phone']}}"><br><br>
    Subject:<input type="text" name="subject" value="{{$data['subject']}}"><br><br>
    Message:<input type="text" name="message" value="{{$data['message']}}"><br><br><br><br>
    <button type="submit">Update</button>
</form>