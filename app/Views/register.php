<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          border: 1px solid #e7e7e7;
          background-color: #31272733;
        }
        body{padding: 0px 0px;}
        
        li {
          float: left;
        }
        
        li a {
          display: block;
          color: rgb(255, 255, 255);
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;

        }
        
        li a:hover:not(.active) {
          background-color: #ddd;
        }
        
        li a.active {
          color: rgb(15, 13, 13);
          background-color: #04AA6D;
        }

        body {
          margin: 0;
          padding: 2rem 5rem;
          text-align: center;
          background-image: url(https://image.makewebeasy.net/makeweb/0/J5aPgkz9K/56Doc/%E0%B8%A7%E0%B8%B4%E0%B8%A7%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B8%A2%E0%B8%B0%E0%B8%A5%E0%B8%B2.jpg);
         width: 100%;
         height: 100%;
         color: rgb(0, 0, 0);
          font-family: "helvetica neue", sans-serif;
          font-weight: 100;
          font-size: 16px;

    }
           
        </style>
</head>
<body>
<ul>
        <li><a href="welcome_message.php">หน้าแรก</a></li>
        <li><a href="\login">ลงทะเบียนวิ่ง</a></li>
        <li><a href="\register">สมัครสมาชิก</a></li>
        <li><a href="\login" class="btn btn-secondary" style="margin-top:7px; color:white;">เข้าสู่ระบบ</a></li>
    </ul>
<div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <h1>Sign Up</h1>
                    <hr>
                    <?php if(isset($validation)): ?>
                        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                    <?php endif; ?>
                    <form action="/register/save" method="post">
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">IDCard Number</label>
                        <input type="text" name="id_card" class="form-control" id="inputforcard" value="<?= set_value('id_card'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="inputforname" value="<?= set_value('name'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputage" class="form-label">Age</label>
                        <input type="text" name="age" class="form-control" id="inputforage" value="<?= set_value('age'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputemail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputpassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputforpassword">
                    </div>
                    <div class="mb-3">
                        <label for="inputconfpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="inputforconfpassword">
                    </div>
                    <button type="submit" class="btn btn-success">Sign Up</button>
                    <a href="/welcome_message.php" class="btn btn-danger me-1">Cancel</a>
                </form>
                </div>
            </div>
        </div>
        
</body>
</html>


