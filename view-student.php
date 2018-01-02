<?php
require_once 'vendor/autoload.php';
use App\classes\student;

$message='';

$queryResult = student::getStudentInfo();


//while ($student = mysqli_fetch_assoc($queryResult)){
//    echo "<pre>";
//    print_r($student);
//}



?>


<hr/>

<a href="view-20.php">Add students ||</a>
<a href="view-student.php">view students</a>





<h1 style="color: green"><?php echo $message; ?></h1>
<hr/>


<table border="1" width="700">
    <tr>
        <th>Id</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobile</th>
    </tr>
    <?php while ($student = mysqli_fetch_assoc($queryResult)){ ?>
    <tr>
        <td><?php echo $student['id'] ;?></td>
        <td><?php echo $student['name'] ;?></td>
        <td><?php echo $student['email'] ;?></td>
        <td><?php echo $student['mobile'] ;?></td>
    </tr>

    <?php }?>
</table>