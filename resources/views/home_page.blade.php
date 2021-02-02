<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home_Page</title>
</head>
<body style="color:white; margin: 0; text-align: center; display: flex; justify-content: space-around; background-image: url('https://codeworkshop.dev/static/ced7ee43ee29ba49df60d677747e4db7/1a900/helloworld.jpg'); background-size: cover;">
    <h1 style="font-family: 'Helvetica', sans serif;  font-size: 100px; margin: 0; align-self: center;">{{$word1}} {{$word2}}!!!</h1>
    <div>
        @foreach ($tests as $test)
            <h2>{{$test}}</h2>
        @endforeach
    </div>
</body>
</html>