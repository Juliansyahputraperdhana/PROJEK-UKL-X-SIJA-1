<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.register-container {
    background-color: #ffffff;
    padding: 20px 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 400px;
    width: 100%;
}

.register-container h2 {
    margin-bottom: 20px;
    color: #333333;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    color: #666666;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    font-size: 16px;
    color: #333333;
}

.input-group input:focus {
    border-color: #007BFF;
    outline: none;
}

button {
    background-color: #007BFF;
    color: #ffffff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
}

button:hover {
    background-color: #0056b3;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="index.php" method="post" name="form1">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>level</td>
                    <td>
                        <select name="level" id="level" required>
                            <option disabled selected> Pilih </option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><button class="btn" name="submit" > Daftar</button></td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>

<?php
                //Check If form submitted, insert form data into users table. 
    if(isset($_POST['Submit'])) {
        $namas= $_POST['nama'];
        $usernames = $_POST['username'];
        $passwords = $_POST['password'];
        $levels= $_POST["level"];
        //echo($judul);
        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli,
        "INSERT INTO users(id,nama,username,password,level) VALUES ('$id','$namas','$usernames', '$passwords','$levels')");


        // Show message when user added
        // echo "Data added successfully. <a href='index.php'>View Data Teknologi Pangan</a>";
        header("location:index.php");

    }
    ?>