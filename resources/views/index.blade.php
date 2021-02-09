<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sendbasicemail</title>

    <style>
        body {
            min-height: 100vh;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Fira Sans", Helvetica, Arial, sans-serif;
        }

        .container {
            background-color: white;
            border-radius: 15px;
            height: auto;
            width: 450px;
        }

        .container h1 {
            text-align: center;
        }

        .container p {
            text-align: center;
        }

        .section {
            width: 250px;
            height: auto;
            margin: auto auto;
            border-radius: 4px;
        }

        .label {
            margin: 5px;
            display: flex;
            font-size: 12px;

        }

        input {
            width: 230px;
            height: 20px;
            padding: 7px 10px;
            margin-bottom: 10px;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
        }

        textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
        }

        .button input {
            width: 55px;
            height: 30px;
            color: white;
            background-color: green;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Send an Email in Laravel</h1>
        <p>Make by Ruchikon Mueanphet</p>
        <p>Student Id : 6135512005</p>
        <div class="section">
            <form action="sendbasicemail" method="get">
                <div class="label">
                    <label for="name">Reciver Name</label>
                </div>
                <input type="text" name="name" id="name">

                <div class="label">
                    <label for="email">Reciver Email</label>
                </div>
                <input type="email" name="email" id="email">

                <div class="label">
                    <label for="subject">Your Subject</label>
                </div>
                <input type="text" name="subject" id="subject">

                <div class="label">
                    <label for="message">Message</label><br>
                </div>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <div class="button">
                    <input type="submit" name="submit" value="send" />
                </div>

            </form>
        </div>

    </div>


</body>

</html>