<html>
<head>
</head>
<body>
  <table>
    <thead>
      <th>ID</th>
      <th>Category</th>
      <th>Date</th>
      <th>Name</th>
      <th>Description</th>
      <th>Target</th>
      <th>Link</th>
    </thead>
    <tbody>


      <?php
      include('connection.php');
      $result= mysqli_query($con,"select * from notifications")
      or die(mysqli_error($con));
      while($row=mysqli_fetch_array($result))
      {
        $id=$row['id'];
        $category=$row['category'];
        $date=$row['date'];
        $name=$row['name'];
        $description=$row['description'];
        $target=$row['target'];
        $link=$row['link'];

        ?>
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $category; ?></td>
          <td><?php echo $date; ?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $description; ?></td>
          <td><?php echo $target; ?></td>
          <td><?php echo $link; ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</body>
</html>
