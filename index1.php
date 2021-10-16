<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="style.css">

    <html>

    <html>
    <html>

    <head>

    </head>

<body>
    <div class="menu-container">
        <a href="home.html">Home</a>
        <a href="contact.html">Contact</a>
    </div>
    <div class="banner-container">
        <img src="C:\Users\yesmi\Downloads\deathnote.jfif" />
    </div>
    <div class="paragraph-container">
        <p> Hellow World! We are students of 5bf</p>

        <h1> this is header 1 </h1>
        <h2> this is header 2 </h2>
        <h3> this is header 3 </h3>
        <h4> this is header 4 </h4>
        <h5> this is header 5 </h5>
        <h6> this is header 6 </h6>
    </div>
    <div class="table-container">

        <table border="1">
            <thead>
                <th> 1</th>
                <th> 2</th>
                <th> 3</th>
            </thead>
            <tbody>
                <tr>
                    <td> Column 1</td>
                    <td> Column 2</td>
                    <td rowspan="2"> Column 3</td>
                </tr>
                <tr>
                    <td> Column 1</td>
                    <td> Column 2</td>
                    <!-- <td> Column 3</td> -->
                </tr>
                <tr>
                    <td colspan="3"> Column 1</td>
                    <!-- <td> Column 2</td> -->
                    <!-- <td> Column 3</td> -->
                </tr>
            </tbody>
        </table>
    </div>
    <div class="form-container">
        <form action="save.php" method="post">
            <table>
                <tr>
                    <td>Student name</td>
                    <td><input name="studentname" required id="studentname" type="text" placeholder="Enter your name"></td>
                </tr>
                <tr>
                    <td>Student ID</td>
                    <td><input name="studentID" type="text" placeholder="Enter your STUDENT ID"></td>

                </tr>
                <tr>
                    <td>GENDER</td>
                    <td>
                        <select name="gender" id="gender">
                            <option>Male</option>
                            <option>Female</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td> <input required type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
    </div>


</body>

</html>