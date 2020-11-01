<html>
<head>

</head>
<body>
    <form method="post" action="/data">
        @csrf
        <label>Enter some text</label>
        <input type="text" name="names">
        <button>Send</button>
    </form>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
        </tr>
        @foreach($names as $name)
            <tr>
            <td>{{$name->id}}</td>
            <td>{{$name->name}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>