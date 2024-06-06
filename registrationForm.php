<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: grid;
            gap:10px;
            max-width:500px;
            margin:auto;
        }
        form input{
            padding:10px;
            outline:none;
            border: 1px solid black;
        }
        form button{
            background:grey;
            color:black;
            padding:10px;
        }
        *{
            border-radius:5px;
        
        }
    </style>
</head>
<body>
    <form method="POST" action="./formHandler.php">
        <input placeholder="Enter your first name" type="text" id='fName' name='fName' >
        <input placeholder="Enter your last name" type="text" id='lName' name='lName' >
        <input placeholder="Enter your gender" type="text" id='gender' name='gender'>
        <input placeholder="Enter your email address" type="text" id='email' name='email'>
        <input placeholder="Enter your phone number" type="number" id='phone' name='phone'>
        <input placeholder="Enter your permanant address" type="text" id='addr' name='addr'>
        <button type='submit'>Submit</button>
    </form>
</body>
</html>