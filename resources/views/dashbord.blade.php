<style>
    * {
        padding: 22;
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

    .table {
        margin-top: 50px
    }
</style>
<div>
    <nav>
        <label class="logo">Employee Mangement</label>
    </nav>
</div>
<div class=table>
    <table border=1 align=center width=100%>
        <tr>
            <th>Sno</th>
            <th>Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>gender</th>
            <th>role</th>
            <th>doj</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($employee as $employees)
            <tr>
                <td>{{ $employees->id }}</td>
                <td>{{ $employees->name }}</td>
                <td>{{ $employees->email }}</td>
                <td>{{ $employees->phone }}</td>
                <td>{{ $employees->gender }}</td>
                <td>{{ $employees->role }}</td>
                <td>{{ $employees->joind }}</td>
                <td><a href='edit/{{ $employees->id }}'>Edit</a></td>
                <td><a href='delete/{{ $employees->id }}'>Delete</a></td>
            </tr>
        @endforeach
    </table>
    <div>
