<?php

namespace App\classes;


class student
{

    public function saveStudentInfo($data){
        $link=mysqli_connect('localhost','root','','bitm-maruf-71');
        $sql="INSERT INTO students(name,email,mobile)
              VALUES('$data[name]','$data[email]','$data[mobile]')";

        if(mysqli_query($link,$sql)){
            $message= "Students info save successfully";
            return $message;

        }else{
            die('Query problem'.mysqli_error($link));
        }
    }




    public function getStudentInfo(){
        $link=mysqli_connect('localhost','root','','bitm-maruf-71');
        $sql= "SELECT * FROM students";

        if(mysqli_query($link,$sql)){
            $queryResult=mysqli_query($link,$sql);

            return $queryResult;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }

}