
<?php include'db_conn.php' ?>
<!DOCTYPE html>
<html lang="en">

    <head>
    	<link href='https://css.gg/trash.css' rel='stylesheet'>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
  background-image: url(pic1.jpg);
                background-position: center;
                background-size: cover;
  font-family:  sans-serif;
}
    ul {
      font-size: 14px;
      list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  }
        

            li {
                display: inline;
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
            }

            li a:hover {
                background-color: #111;
            }

           h1 {
                text-align: center;
                margin-top: 100px;
                background-color:white;
                margin: 80px 600px 50px 600px;
                padding: 12px;
                border-radius: 25px;  
                border: 7px solid #009889; 
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }


.order {
                margin: 0px 370px 0px 370px;
                padding: 10px;
                background-color: white;
                border-collapse: collapse;
                margin-left: auto;
                margin-right: auto;
                margin-top: 50px;
                font-size: 0.8em;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                width:900px ;
                overflow-y: auto;
                height: 400px;
                padding-top: 0px;
            }

            .order thead tr {
                position: sticky;
                top: 0;
                background-color: #009879;
                color: white;
                text-align: left;
                font-weight: bold;
                height: 50px;
                }
            table{
                border-collapse: collapse;
        width: 100%;
            }
            
           .order th,
            .order td {
                padding: 18px 15px;
            }

            .order tbody tr {
                border-bottom: 1px solid #dddddd;

            }

            .order tbody tr:nth-of-type(odd) {
                color: #888888;
            }

            .order tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }

            .order tbody tr:last-of-type {
                border-bottom: 2px solid #009879;
            }
            .dC{
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dC a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dC a:hover {background-color: #f1f1f1;}

.dropdown:hover .dC {
  display: block;
}
      </style>
        <title>User Feedback</title>
    </head>

    <body>
        <ul>
  <li><a href="a_dashboard.php">Home</a></li>
  <li><a href="a_order.php">Order Details</a></li>
  <li><a href="a_cancellation.php">Cancellation requests</a></li>
  <li><a href="userfeedback.php">User Feedback</a></li>
  <li class="dropdown"><a href="javascript:void(0)" class="drop">Employee</a>
  <div class="dC">
    <a href="addEmployee.php">Add Employee</a>
      <a href="viewEmployee.php">View Employees</a>
    </div>
    </li>
  <li class="dropdown"><a href="javascript:void(0)" class="drop">Branch manage</a>
  <div class="dC">
      <a href="addBranch.php">Add Branch</a>
      <a href="viewBranch.php">View Branch</a>
    </div>
    </li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
</ul>
        <h1>User Feedback</h1>
        <div class="order">
        <table class="content-table">
            <thead>
                    <tr>
                        <th>#</th>
                        <th>orderID</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Feedback</th>
                    </tr>
                </thead>
            <tbody>
            	<?php
                    $i = 1;
                    $qry = $conn->query("SELECT * FROM userfeedback order by id asc; ");
                    while($row= $qry->fetch_assoc()):
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $i++ ?></td>
                        <td><b><?php echo ucwords($row['orderId']) ?></b></td>
                        <td><b><?php echo ucwords($row['name']) ?></b></td>
                         <td><b><?php echo ucwords($row['email']) ?></b></td>
                        <td><b><?php echo $row['feedback'] ?></b></td>
                        </tr>
            <?php 
        endwhile;?>
                </tbody>
        </table></div>

    </body>

</html>