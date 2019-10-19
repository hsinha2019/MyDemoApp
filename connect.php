<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CodeDeploy Lab</title>
  <style>
    body {
      color: #000000;
      background-color: #0000FF;
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    h1 {
      font-size: 500%;
      font-weight: normal;
      margin-bottom: 0;
    }

    h2 {
      font-size: 200%;
      font-weight: normal;
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  <div align="center">
    <h1>Hello P15</h1>
    <h2>This is version 1.0 of Demo Application</h2>
    <h3><?php
        $username = "demoApp";
        $password = "demoApp";
        $hostname = "yourhostnameaddress";
        $dbname = "demoApp";

        //connection to the database
        $dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
        echo "Connected to MySQL using username - $username, password - $password, host - $hostname<br>";
        $selected = mysql_select_db("$dbname",$dbhandle)   or die("Unable to connect to MySQL DB - check the database name and try again.");
        ?>
      </h3>
    </div>
  </body>
</html>
