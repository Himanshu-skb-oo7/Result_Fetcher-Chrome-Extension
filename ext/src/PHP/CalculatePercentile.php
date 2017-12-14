
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegedata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM requiredtable where Branch_Name='B. Tech. Computer Science and Engineering'";
$result = mysqli_query($conn, $sql);
$max=0;
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "name: " . $row["Student_Name"]. "<br>";

	if($row["Marks"] > $max)
		$max=$row["Marks"];
    }
} else {
    echo "0 results";
}

echo $max;

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

	 $branch=$row["Branch_Name"];
        $marks=$row["Marks"]/$max*100;
        $name=$row["Student_Name"];

       $newquery="update requiredtable set Percentile='$marks' where Branch_Name='$branch' and Student_Name='$name'";

        mysqli_query($conn,$newquery);

    }
} else {
    echo "0 results";
}








$sql = "SELECT * FROM requiredtable where Branch_Name='B. Tech. Information Technology'";
$result = mysqli_query($conn, $sql);
$max=0;
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "name: " . $row["Student_Name"]. "<br>";

	if($row["Marks"] > $max)
		$max=$row["Marks"];
    }
} else {
    echo "0 results";
}

echo $max;

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

	$branch=$row["Branch_Name"];
        $marks=$row["Marks"]/$max*100;
        $name=$row["Student_Name"];

       $newquery="update requiredtable set Percentile='$marks' where Branch_Name='$branch' and Student_Name='$name'";

        mysqli_query($conn,$newquery);

    }
} else {
    echo "0 results";
}






$sql = "SELECT * FROM requiredtable where Branch_Name='B. Tech. Electrical Engineering'";
$result = mysqli_query($conn, $sql);
$max=0;
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "name: " . $row["Student_Name"]. "<br>";

	if($row["Marks"] > $max)
		$max=$row["Marks"];
    }
} else {
    echo "0 results";
}

echo $max;

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

	$branch=$row["Branch_Name"];
        $marks=$row["Marks"]/$max*100;
        $name=$row["Student_Name"];

       $newquery="update requiredtable set Percentile='$marks' where Branch_Name='$branch' and Student_Name='$name'";

        mysqli_query($conn,$newquery);

    }
} else {
    echo "0 results";
}





$sql = "SELECT * FROM requiredtable where Branch_Name='B. Tech. Electronics and Communication Engineering'";
$result = mysqli_query($conn, $sql);
$max=0;
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "name: " . $row["Student_Name"]. "<br>";

	if($row["Marks"] > $max)
		$max=$row["Marks"];
    }
} else {
    echo "0 results";
}

echo $max;

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

	$branch=$row["Branch_Name"];
        $marks=$row["Marks"]/$max*100;
        $name=$row["Student_Name"];

       $newquery="update requiredtable set Percentile='$marks' where Branch_Name='$branch' and Student_Name='$name'";

        mysqli_query($conn,$newquery);

    }
} else {
    echo "0 results";
}






$sql = "SELECT * FROM requiredtable where Branch_Name='B. Tech. Mechanical Engineering'";
$result = mysqli_query($conn, $sql);
$max=0;
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "name: " . $row["Student_Name"]. "<br>";

	if($row["Marks"] > $max)
		$max=$row["Marks"];
    }
} else {
    echo "0 results";
}

echo $max;

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

	$branch=$row["Branch_Name"];
        $marks=$row["Marks"]/$max*100;
        $name=$row["Student_Name"];

       $newquery="update requiredtable set Percentile='$marks' where Branch_Name='$branch' and Student_Name='$name'";

        mysqli_query($conn,$newquery);

    }
} else {
    echo "0 results";
}




$sql = "SELECT * FROM requiredtable where Branch_Name='B. Tech. Chemical Engineering'";
$result = mysqli_query($conn, $sql);
$max=0;
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "name: " . $row["Student_Name"]. "<br>";

	if($row["Marks"] > $max)
		$max=$row["Marks"];
    }
} else {
    echo "0 results";
}

echo $max;

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

	$branch=$row["Branch_Name"];
        $marks=$row["Marks"]/$max*100;
        $name=$row["Student_Name"];

       $newquery="update requiredtable set Percentile='$marks' where Branch_Name='$branch' and Student_Name='$name'";

        mysqli_query($conn,$newquery);

    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM requiredtable where Branch_Name='B. Tech. Civil Engineering'";
$result = mysqli_query($conn, $sql);
$max=0;
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "name: " . $row["Student_Name"]. "<br>";

	if($row["Marks"] > $max)
		$max=$row["Marks"];
    }
} else {
    echo "0 results";
}

echo $max;

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

	$branch=$row["Branch_Name"];
        $marks=$row["Marks"]/$max*100;
        $name=$row["Student_Name"];

       $newquery="update requiredtable set Percentile='$marks' where Branch_Name='$branch' and Student_Name='$name'";

        mysqli_query($conn,$newquery);

    }
} else {
    echo "0 results";
}



mysqli_close($conn);
?>