<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read & Write</title>
</head>
<body>
    <h1> Read and write to file</h1>
<style>
        * {
            font-family: sans-serif;
            text-align: center;
            font-size: 35px;
        }
        
        table{
            display: inline-block;

        }

        th,td {
            border: 1px solid #999;
            border-collapse: collapse;
            padding: 5px;
        }
</style>
<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    /*$file = fopen('name.txt','r');  r - read only 
    $file = fopen('name.txt','w');  w - write but overwrite older input */
    $file = fopen('name.txt','a'); //  a - add
    fwrite($file,$name. "\n");
    fclose($file);
}
?>
<table><tr>
    <td>
        <p>List of names:</p>
        <?php
            if(file_exists('name.txt')){
            
            $file = file('name.txt');
            //var_dump($file);
            echo "<ul>";
            foreach ($file as $name){
                echo "<li>$name</li>";
            }
            echo "</ul>";
        } else echo "The list of names is empty"
        ?>
        
    </td>
    <td>
        <p> Add name:</p>
        <form action="index.php" method="post">
            <p>Name: <input type="text" name="name" id=""></p>
            <input type="submit" value="Add">
        </form>
    </td>
    </td>
</tr></table>

</body>
</html>