<!DOCTYPE html>
<html>
<head>
  <title>Display</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Modak&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">




<style>
 

* {
  box-sizing: border-box;
}

:root {
  --background: #E5FFB3;
  --background-accent: #DBF8A3;
  --background-accent-2: #BDE66E;
  --light: #92DE34;
  --dark: #69BC22;
  --text: #025600;
}

body {
 
   font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background:white;
}

div {
  display: block;
  width: 100px;
  margin: 0 auto 0 auto;
  position: absolute;
  left: 0;
  right: 0;
  top: 30vh;
}

button {
  display: block;
  cursor: pointer;
  outline: none;
  border: none;
  background-color: var(--light);
  width: 100px;
  height: 20px;
  border-radius: 30px;
  font-size: 1.0rem;
  font-weight: 150;
  color: var(--text);
  background-size: 100% 100%;
  box-shadow: 0 0 0 7px var(--light) inset;
  margin-bottom: 15px;
}

button:hover {
  background-image: linear-gradient(
    145deg,
    transparent 10%,
    var(--dark) 10% 20%,
    transparent 20% 30%,
    var(--dark) 30% 40%,
    transparent 40% 50%,
    var(--dark) 50% 60%,
    transparent 60% 70%,
    var(--dark) 70% 80%,
    transparent 80% 90%,
    var(--dark) 90% 100%
  );
  animation: background 3s linear infinite;
}

@keyframes background {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 400px 0;
  }
}
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background:white;

}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;

    }
}

</style>
</head>
  
<body>
<table>
<tr>
<th>User-id</th>
<th>Name</th>
<th>Email</th>
<th>Phone No</th>

<th>Feedback</th>
<th>Suggestions</th>

</tr>




 <?php
$conn = mysqli_connect("localhost", "root", " ", "realestate");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT user_id,fname,femail,phone,feedback,suggestions FROM feedback";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>".$row["user_id"]."</td>  <td>" . $row["fname"] . "</td>  <td>". $row["femail"]."</td>  <td>". $row["phone"]."</td> <td>".$row["feedback"]."</td> <td>". $row["suggestions"]."</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>