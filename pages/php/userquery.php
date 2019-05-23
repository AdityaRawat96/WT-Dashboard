<html>
<head>
</head>
<body>
  <table>
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Username</th>
      <th>Password</th>
      <th>Rights</th>
      <th>Email</th>
      <th>Department</th>
      <th>notificationCount</th>
    </thead>
    <tbody>


      <?php
      include('connection.php');
      $result= mysqli_query($con,"select * from users")
      or die(mysqli_error($con));
      while($row=mysqli_fetch_array($result))
      {
        $id=$row['id'];
        $name=$row['name'];
        $username=$row['username'];
        $password=$row['password'];
        $rights=$row['rights'];
        $email=$row['email'];
        $department=$row['category'];
        $notification=$row['notification_count'];
        ?>
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $username; ?></td>
          <td><?php echo $password; ?></td>
          <td><?php echo $rights; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $department; ?></td>
          <td><?php echo $notification; ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</body>
</html>
