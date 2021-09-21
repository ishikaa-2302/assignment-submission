<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Assignment Submission Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <table class="table table-striped table-dark">
      <tr>
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Registration Number</th>
            <th scope = "col">Date of Submission</th>
            <th scope="col">Link of submission</th>
          </tr>
        </thead>
        <?php
        session_start();
        include("connection.php");
        $query = "select * from student";
        $data = mysqli_query($con, $query);
        $total = mysqli_num_rows($data);
        if($total !=0){
          while($result = mysqli_fetch_assoc($data)){
            echo "
                   <tr>
                    <td>".$result["name"]."</td>
                    <td>".$result["email"]."</td>
                    <td>".$result["roll"]."</td>
                    <td>".$result["dated"]."</td>
                    <td>".$result["img_dir"]."</td>
                   </tr>
                   ";
                 }
        }
        else{
                 echo "No user found";
            }
        ?>
    </table>
  </body>
</html>
