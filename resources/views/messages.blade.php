<html>

<head>
    <title>

    </title>
</head>
<body>
<h1>Message Board</h1>

<form action="say_something" method="post">

    {{ csrf_field() }}

    <input type="text" name="message" placeholder="say something">
    <input type="submit" value="送信">

</form>

{{ $messages->count() }}

<table>
    <tr>
        <th>posted at</th>
        <th>message</th>
    </tr>
    @foreach($messages as $message)
    <tr>
        <td>{{ $message->created_at }}</td>
        <td>{{ $message->message }}</td>
    </tr>
    @endforeach
</table>


</body>


</html>