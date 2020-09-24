@extends('master')
@section('title', 'home')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">

	 body {
                
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }


            .content {
                text-align: center;
                margin-top: 200px;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
	
	</style>
</head>

<body>
    <div class="content">
     <div class="title m-b-md">Sinau Laravel</div>
</body>
</html>
@endsection