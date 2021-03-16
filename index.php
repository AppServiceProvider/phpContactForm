<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,700;1,500&display=swap');
        body {
            background-color: #FEFCFF;
            font-family: 'Lora', serif;
            box-sizing: border-box;
        }
        form input {
            display: block;
            margin: 0 auto;
            border-width: 0px 0px 02px 0px;
        }
        .form-center {
            text-align: center;
            border-radius: 5px;
        }
        h2 {
            text-align: center;
            text-transform: uppercase;
        }
        .button {
            text-transform: uppercase;
            letter-spacing: 1px;
            background-color: black;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: block;
            padding: 10px 60px;
            border-radius: 5px;
        }
        ::placeholder {
            color: black;
            opacity: 0.8;
            /* Firefox */
            background-clip: red;
            padding-left: 1px;
        }
        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: black;
        }
        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: black;
        }
        ::-webkit-input-placeholder {
            background: #FEFCFF;
            transition: opacity 20s ease-in-out;
        }
        textarea {
            background: #FEFCFF;
        }
        textarea:focus {
            border: none;
        }
        input:focus {
            outline: none;
        }
        input:focus {
            color: #696969;
            transition: 20s ease-in-out;
        }
        .form-center input:focus {
            transform: translateY(-20px)
        }
        textarea:focus {
            outline-color: black;
            opacity: 0.8;
            /*            outline-style: none;*/
        }
        input[type=text] {
            -webkit-transition: all .2s ease-out;
            -moz-transition: all .2s ease-out;
            -ms-transition: all .2s ease-out;
            -o-transition: all .2s ease-out;
            transition: all .2s ease-out
        }
    </style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-5">
                <h2> <span>Contact</span></h2>
            </div>
            <div class="col-sm-12 mt-4">
                <form action="form.php" method="post">
                    <div class="form-center">
                        <input class="mb-5" type="text" name="fname" size="50" placeholder="First Name" maxlength="30">
                        <input class="mb-5" type="text" name="lname" size="50" placeholder="Last Name" maxlength="30">
                        <input class="mb-5" type="text" name="email" size="50" placeholder="Email" required>
                        <textarea type="message" name="comment" rows="4" cols="50" placeholder="Write something.."></textarea>
                        <input class="mt-4 button" type="submit" name="submitButton" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5" style="float:left; width: 100%;">
            <hr />
        </div>
    </div>
</body>
</html>