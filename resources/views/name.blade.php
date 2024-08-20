<!DOCTYPE html>
<html>
<head>
    <title>Random Name Generator</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #412e4c;
        }
        .container {
            text-align: center;
            background: #475161;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        button {
            padding: 10px 20px;
            background-color: #7e5891;
            color: #bababa;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #462761;
        }
        .name {
            margin-top: 20px;
            font-size: 1.2em;
            color: #bababa;
        }
        h1{
            font-size: 24px;
            font-family: Arial, sans-serif;
            font-weight: initial;
            color: #9ca3af;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Random Name Generator</h1>
    <button id="generateNameButton">Generate Random Name</button>
    <div class="name" id="randomName"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#generateNameButton').click(function(){
            $.ajax({
                url: '/',
                type: 'POST',
                data: {
                    "_token":$("meta[name='csrf-token']").attr("content"),
                },
                success: function(data) {
                    $('#randomName').text(data.name);
                },
                error: function(xhr, status, error) {
                    console.error(xhr);
                }
            });
        });
    });
</script>
</body>
</html>
