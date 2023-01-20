<head>
    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        nav {
            background: #0082e6;
            height: 80px;
            width: 100%;
        }

        label.logo {
            color: white;
            font-size: 35px;
            line-height: 80px;
            padding: 0 100px;
            font-weight: bold;
        }

        nav ul {
            float: right;
            margin-right: 20px;
        }

        nav ul li {
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
        }

        nav ul li a {
            color: white;
            font-size: 17px;
            text-transform: uppercase;
        }

         .design {
            margin-top: 100px;
            margin-left: 30%;
            margin-right: 30%;
            border: 1px solid black;
            max-width: 600px;
            padding-top:20px;
        }

        .alert-danger {
            color: red;
        }
    </style>
</head>

    <div>
    <nav>
        <label class="logo">Employee Mangement</label>

    </nav>
</div>
 <div class="design" align="center">
            <form method="POST" action="create">
                {{-- <input type="hidden" name="_token" value=" csrf_token() "> --}}
                @csrf
                <label>name</label>
                <input type="text" name="name"></br>
            </br>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>email</label>
                <input type="email" name="email"></br>
            </br>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>phone</label>
                <input type="text" name="phone" maxlength="10"></br>
            </br>
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>gender</label>
                <input type="radio" name="sex" value="male"><label>male</label>
                <input type="radio" name="sex" value="female"><label>female</label></br>
            </br>
                @error('sex')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <lable>Role</lable>
                <select name="Role">
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select></br>
            </br>
                @error('Role')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>doj</label>
                <input type="date" name="joined"></br>
            </br>
                @error('joined')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                <input type="submit" value="adduser">
            </form>
        </div>
