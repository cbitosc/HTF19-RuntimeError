<html>
<body>
<form action ="./microsoft1.php " method="GET">
<input type="submit" value="submit">
  <select name="branch_id">
    <option value="733">cse</option>
    <option value="731">ece</option>
  </select>
</form>

</form>
<?php
$con = mysqli_connect("localhost","root","","hackathon");
// Check connection
if(isset($_GET['branch_id']))
{
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$k=$_GET['branch_id'];
$sql="SELECT * from students where branch_id='$k' ";
$rs=mysqli_query($con,$sql);
echo "<table border='1'>
<tr><th>first name</th>
<th>last name</th>
<th>gmail</th>
<th>gender</th>
<th>10th</th>
<th>12th</th>
<th>cgpa</th>
<th>backlogs</th>
<th>branches</th>
<th>branch_id</th>
</tr>";
while($result=mysqli_fetch_array($rs))
{
   $sql2="SELECT * from students where branch_id=733 ";

     echo "<h2> ";
     foreach ($rs as $row) {

      echo "<tr>";
       echo "<td>".$row["first name"]."</td> ";
       echo "<td>".$row["last name"]."</td> ";
       echo "<td>".$row["gmail"]."</td> ";
       echo "<td>".$row["gender"]."</td> ";
       echo "<td>".$row["10th"]."</td> ";
       echo "<td>".$row["12th"]."</td> ";
       echo "<td>".$row["cgpa"]."</td> ";
       echo "<td>".$row["backlogs"]."</td> ";
       echo "<td>".$row["branches"]."</td> ";
       echo "<td>".$row["branch_id"]."</td> ";

      echo" </tr>";


     }
    //  echo "$rs['name'] ";
     echo "</h2>";
     echo "</table>";

}
}
?>
</body>
</html>