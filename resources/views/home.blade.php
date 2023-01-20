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
            padding-left: 60px;
            padding-right: 50px;
            max-width: 600px;



        }

        .alert-danger {
            color: red;
        }
    </style>
</head>

<body>
    <nav>
        <label class="logo">Employee Mangement</label>
        <ul>
            <li><a href="{{ url('dashbord') }}">dashbord</li>
            <li><a href="{{ url('adduser') }}">adduser</li>
        </ul>
    </nav>


</body>
