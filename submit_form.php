<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    body{
      background: rgb(216, 234, 235);
    }
  </style>
  <body>
    <h1>The submitted data is --</h1>
    <?php
        $movie_name = $_POST["movie_name"];
        $showdate = $_POST["showdate"];
        $showtime = $_POST["showtime"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $seats = $_POST["no_of_seats"];
        $children = $_POST["children"];

        echo "Movie Name =". $movie_name."<br>";
        echo "Show Date =". $showdate."<br>";
        echo "Show Time =". $showtime."<br>";
        echo "First Name =". $fname."<br>";
        echo "Last Name =". $lname."<br>";
        echo "Age = ". $age."<br>";
        echo "Email ID =". $email."<br>";
        echo "Phone Number =". $phone."<br>";
        echo "No. of Seats Booked =". $seats."<br>";
        echo "No. of Children =". $children."<br>";

        $connection = new mysqli('localhost', 'id15124314_devanshisingh', 'Qwerty!23456', 'id15124314_mall');
        if($connection -> connect_error)
        {
             die("Connection Failed".$connection -> connect_error);
        }
        else
        {
            $stmt = $connection -> prepare ("insert into movietickets(moviename, showdate, showtime, fname, lname, age, email, phone, seats, children) values(?,?,?,?,?,?,?,?,?,?)");
            $stmt -> bind_param("sssssissii", $movie_name, $showdate, $showtime, $fname, $lname, $age, $email, $phone, $seats, $children);
            $stmt -> execute();
            echo "Data has been added to the Database";
            $stmt -> close();
            $connection -> close();
        }

    ?>

    <a href="">Return to Mall Main Page</a>
    <a href="">Return to MovieCenter</a>

    background-color: rgb(209, 206, 44);padding: 5px;font-weight: bold;margin: 5px;

  </body>
</html>
