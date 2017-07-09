<?php
session_start();
if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
}
else
{
  header("Location:../index.php");
}
$username=$_SESSION['username'];
$userid = $_SESSION['user_Id'];

?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!--Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../css/global.css">
  <!--Bootstrap CSS-->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
  <!--Script-->

</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll" style="float:right;">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="home.php"></a>
      </div>
      <div class="navbar-header">
        <a href="home.php">
          <img id="logoforum" class="img-responsive" src="../images/logoforum.png" style="text-align:center;margin-bottom:5px;margin-top:5px;height:50px;"/>
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <!-- <ul class="nav navbar-nav navbar-left">
          <li><a href="#quest">Buat Post Baru!</a></li>
        </ul> -->

        <ul class="nav navbar-nav navbar-right" >
          <li><a href="#quest">Buat Post Baru!</a></li>
          <li><a href="#" ><span class="glyphicon glyphicon-user"></span> <?php echo $username;?></a></li>
          <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div id="content" class="container">
    <h4>Diskusi Terbaru</h4>
    <hr>
    <?php  include "../functions/db.php";

    $sel = mysql_query("SELECT * from category order by cat_id DESC");
    while($row=mysql_fetch_assoc($sel)){
      extract($row);
      echo '<div class="panel panel-success">
      <div class="panel-heading">
      <h3 class="panel-title">'.$category.'</h3>
      </div>
      <div class="panel-body">
      <table class="table table-stripped">
      <tr>
      <th>Judul Topik</th>
      <th>Kategori</th>
      <th>Aksi</th>
      </tr>';
      $sel1 = mysql_query("SELECT * from tblpost where cat_id='$cat_id' order by post_id DESC");
      while($row1=mysql_fetch_assoc($sel1)){
        extract($row1);
        echo '<tr>';
        echo '<td>'.$title.'</td>';
        echo '<td>'.$category.'</td>';
        echo '<td><a href="content.php?post_id='.$post_Id.'"><button class="btn btn-success">View</button></td>';
        echo '</tr>';
      }


      echo '</table>
      </div>
      </div>';
    }
    ?>
    <div class="my-quest" id="quest">
      <div>
        <form method="POST" action="question-function.php">

          <label>Kategori</label>
          <select name="category" class="form-control">
            <option value="" disabled selected>Pilih Kategori</option>
            <?php $sel = mysql_query("SELECT * from category");

            if($sel==true){
              while($row=mysql_fetch_assoc($sel)){
                extract($row);
                echo '<option value='.$cat_id.'>'.$category.'</option>';
              }
            }
            ?>
          </select>
          <br>
          <label>Judul Topik</label>
          <input type="text" class="form-control" name="title"required>
          <br>
          <label>Isi Konten</label>
          <textarea name="content"class="form-control">
          </textarea>
          <br>
          <input type="hidden" name="userid" value=<?php echo $userid; ?>>
          <input type="submit" class="btn btn-success pull-right" value="Post">
        </form><br>
        <hr>
        <a href="" class="pull-right">Close</a>
      </div>
    </div>
    <script src="../js/jquery.js"></script>
    <!-- <script src="../js/jquery.min.js"></script> -->
    <!-- <script src="../js/bootstrap.js"></script> -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
  </html>
