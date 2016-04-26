<html>
<head>
<title>Gene Splice</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <style>
        
      body{
          background: FloralWhite;
          margin: 50px;
          text-align: center;
      }


      </style>

    <!---------------- NOW THE IMPORTANT STUFF ------------ -->
    <?
    include initDB.php;
    ?>
    
    
    
</head>
<body>


<h1 id="text">Gene Splice</h1>
<h2 align="cente">use this tool to understand how genes can be spliced in many different ways</h2>
<form action="table" method="get" onsubmit="return CreateMultTable()">

<form action = "page2.php">
     <!-- File Name : <input type="text" name="fileName"><br> -->
  <input type="submit" value="Submit">
</form>


    
    
</form>
</body>
</html>
