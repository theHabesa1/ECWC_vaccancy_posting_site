
<style>
table.customTable {
  width: 100%;
  height: 50%;
  position: relative;
  background-color: #FFFFFF;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #B0F8AB;
  border-style: solid;
  color: #000000;
  
  padding: 100vh 50px 20px;
}

table.customTable td, table.customTable th {
  border-width: 2px;
  border-color: #B0F8AB;
  border-style: solid;
  padding: 5px;
}

table.customTable thead {
  background-color: #6DF872;
}
</style>

<?php require_once('admin/include/dbcon.php'); ?>
<?php 
$username = "root"; 
$password = ""; 
$database = "blog"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM posts";

if(isset($_GET['post'])){
    require_once('blog.php');
}
$mFunction = new Functions;
$posts = $mFunction->getPosts();



echo '<table class="customTable" border="0" cellspacing="2" cellpadding="2"> 
<thead>
      <tr> 
          <td> <font face="Arial">Job Title</font> </td> 
          <td> <font face="Arial">Job Description</font> </td> 
          <td> <font face="Arial">Opened date</font> </td> 
          <td> <font face="Arial">End Date</font> </td> 
          <td> <font face="Arial">number required</font> </td> 
         
      </tr>
</thead>';


if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["postTitle"];
        $field2name = $row["postContent"];
        $field3name = $row["postTimestamp"];
        $field4name = $row["endDate"];
        $field5name = $row["num"];

        
    
       
                  
        echo '<tr> 
                 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                 
              </tr>';
            
          }

            
    }
    

    
    
    $result->free();

?>
