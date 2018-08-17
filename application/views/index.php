<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="bg-info">
  <div class="nav bg-light text-primary p-4 mb-3">
    <div class="d-flex w-100 justify-content-between align-items-center">
      <div class="mr-2">
        <h2>
          <a href="<?php echo base_url('/') ?>">Logo</a>
        </h2>
      </div>
      <div>
        <a class="px-2" href="#">Home</a>
        <a class="px-2" href="/create">create</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="card">
      <div class="card-title">
        <h2 class="text-center">All users</h2>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Mobile</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->email; ?></td>
                <td><?php echo $user->address; ?></td>
                <td><?php echo $user->mobile; ?></td>
                <td>Action</td>
              </tr>
            <?php endforeach ?>
            <tr>

            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
