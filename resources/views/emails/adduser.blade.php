<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form-control {
            background: transparent;
            border: 0;
            border-radius: 0;
            border-bottom: 1px solid #f5f5f5;
            padding-left: 0;
            color: #7A88A1;


            box-shadow: none;
            height: 45px;
        }

        .form-control {
            display: block;
            /* width: 100%; */
            height: calc(2.0625rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .login-input .form-group {
    margin-bottom: 30px;
}
    </style>
</head>

<body>
    <h1>User Form</h1>
    <form action="{{ url('adduser') }}" method="post" class="login-input" style="border: solid 2px; padding: 20px;">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="password">BirthDate</label>
            <input type="date" class="form-control" name="birthdate" id="birthdate">
        </div>
        <button type="submit">Submit</button>

    </form>
</body>

</html>
