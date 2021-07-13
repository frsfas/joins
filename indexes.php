<?php
    include_once("conn.php");
    $result=mysqli_query($conn,$sql);
?>

<html>

    <head>
        <title>homepage</title>
        <link rel="stylesheet" type="text/css" href="design.css">
    </head>

    <body>
        <a href="ht.html">add new data</a><br /><br />
        <table width="80%" border="0">
            <tr bgcolor='#00ffff'>
                <td>name</td>
                <td>email</td>
                <td>picture</td>
                
                <td>delete</td>
            </tr>
            <?php
                while($res = mysqli_fetch_array($result))
                {
                    echo"<tr>";
                    echo"<td>".$res['name']."</td>";
                    echo"<td>".$res['email']."</td>";
                    echo"<td>".$res['picture']."</td>";
                    
                    echo "<td><a href=\"delete.php?id=$res[uid]\" onclick=\"return confirm('are you sure you want to delete?')\">__delete__</a></td>";
                }
            ?>

        </table>
    </body>

</html>