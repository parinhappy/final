<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/navbar.css'); ?>">
  <style>
        
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

                    
            footer {
              background-color:#31272733;
              padding: 10px;
              text-align: center;
              color: rgb(0, 0, 0);
            }
        </style>
</head>
<body>
<?php 
require('navbar.php'); ?>
<center><br><h2>ผลการลงทะเบียน</h2>
           
              <div class="container mt-4">
                        <?php 
                        $numItems = count($showregis);
                        $i = 0; 
                        if ($numItems == 0){ ?>
                        <p>ไม่มีข้อมูลการลงทะเบียน</p>
                        <?php 
                        }else{
                        foreach ($showregis as $k) {
                          ?>
                        <p>ไอดี : RUN<?php echo $k['ID']; ?> รหัสบัตรประชาชน : <?php echo $k['member']; ?> ประเภทกิจกรรม : <?php echo $k['category_run']; ?></p>
                        <?php }} ?>
              </div>
            </center>
</body>
</html>