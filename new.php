<?php
    $servername='localhost';
    $dbname='new';
    $username='root';
    $password='';

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    $result=mysqli_query($conn,"select * from user order by uid desc");
    $uid = mysqli_query($conn,"select uid from user order by uid desc limit 1");
    

?>
<html>
    <head>
        <title>project</title>
        <link rel="stylesheet" type="text/css" href="design.css">

    </head>
    <body>
        <div>
            <h1>REGISTER FORM</h1>
            <br/>
            <br/>
            <form action="new.php" method="post" name="form1">
                <table>
                    <tr>
                        <td><label>name :</label></td>
                        <td><input type="text" name="name" placeholder="enter your name" required size="40"></td>
                    </tr>
                    <tr>
                        <td><label>email :</label></td>
                        <td><input type="email" name="email" placeholder="enter your mail i'd" required size="40"></td>
                    </tr>
                    <tr>
                        <td><label>mobile no :</label></td>
                        <td><input type="text" name="number" placeholder="enter your number" required size="40"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="submit" type="submit" name="submit" value="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

<html>

    <head>
        <title>homepage</title>
        <link rel="stylesheet" type="text/css" href="design.css">
    </head>

    <body>
        <a href="new.php">add new data</a><br /><br />
        <table width="80%" border="0">
            <tr bgcolor='#00ffff'>
                <td>name</td>
                <td>email</td>
                <td>mobile_no</td>
            </tr>
            <?php
                if(isset($_POST['submit']))
                {
                    $name=mysqli_real_escape_string($conn,$_POST['name']);
                    $email=mysqli_real_escape_string($conn,$_POST['email']);
                }
                else{
                    $result1=mysqli_query($conn,"insert into user values(null,'$name','$email')");
                    

                }
                while($res = mysqli_fetch_assoc($result1))
                {
                    print_r($res['name']);
                    print_r($res['email']);
                    
                    
                }

                

            ?>
            <?php
                if(isset($_POST['submit']))
                {
                    $number=mysqli_real_escape_string($conn,$_POST['number']);

                }
                
                while($res1 = mysqli_fetch_assoc($result2))
                {
                    print_r($res1['number']);


                }
                while($res2 = mysqli_fetch_assoc($uid))
                {

                    $id= ($res2['uid']);
                }
    `               $result2=mysqli_query($conn,"insert into images values(null,'$id','$number')");




            ?>

        </table>
    </body>

</html>