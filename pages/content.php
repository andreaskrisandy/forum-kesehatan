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
  <title></title>

  <!--Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../css/global.css">
  <!--Bootstrap CSS-->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <!--Script-->
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll" style="float:right;">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-content">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand page-scroll" href="home.php"></a> -->
      </div>
      <div class="navbar-header">
        <a href="home.php">
          <img id="logoforum" class="img-responsive" src="../images/logoforum.png" style="margin-bottom:5px;margin-top:5px;height:75px;"/>
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="menu-content">

        <!-- <ul class="nav navbar-nav navbar-left">
        <li><a href="#quest">Buat Post Baru</a></li>
      </ul> -->
      <ul class="nav navbar-nav navbar-right"><!-- kenapa ul dlm ul?-->
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
  <h4>Detail Diskusi</h4>
  <hr>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Diskusi</h3>
    </div>
    <div class="panel-body">
      <?php

      include "../functions/db.php";
      $id = $_GET['post_id'];


      $sql = mysql_query("SELECT * from tblpost as tp join category as c on tp.cat_id=c.cat_id where tp.post_Id='$id' ");
      if($sql==true){
        while($row=mysql_fetch_assoc($sql)){
          extract($row);
          if($user_Id==009){
            echo "<label>Judul Topik: </label> ".$title."<br>";
            echo "<label>Kategori Topik: </label> ".$category."<br>";
            echo "<label>Tanggal Dibuat: </label> ".$datetime;
            echo "<p class='well'>".$content."</p>";
            echo "<label>Dibuat Oleh: </label> Admin";
          }
          else{
            $sel = mysql_query("SELECT * from tbluser where user_Id='$user_Id' ");
            while($row=mysql_fetch_assoc($sel)){
              extract($row);
              echo "<label>Judul Topik : </label> ".$title."<br>";
              echo "<label>Kategori Topik : </label> ".$category."<br>";
              echo "<label>Tanggal Dibuat : </label> ".$datetime;
              echo "<p class='well'>".$content."</p>";
              echo '<label>Dibuat Oleh : </label> '.$fname.' '.$lname;
            }

          }


        }
      }



      ?>

      <br><label>Komentar</label><br>
      <div id="comments">
        <?php
        $postid= $_GET['post_id'];
        $sql = mysql_query("SELECT * from tblcomment as c join tbluser as u on c.user_Id=u.user_Id where post_Id='$postid' order by datetime");
        $num = mysql_num_rows($sql);
        if($num>0){
          while($row=mysql_fetch_assoc($sql)){
            echo "<label>Dikomentari oleh: </label> ".$row['fname']." ".$row['lname']."<br>";
            echo '<label class="pull-right">'.$row['datetime'].'</label>';
            echo "<p class='well'>".$row['comment']."</p>";
          }

        }

        ?>
      </div>
    </div>
  </div>
  <hr>
  <div class="col-sm-5 col-md-5 sidebar">
    <h3>Komentar</h3>
    <form method="POST">
      <textarea type="text" class="form-control" id="commenttxt"></textarea><br>
      <input type="hidden" id="postid" value="<?php echo $_GET['post_id']; ?>">
      <input type="hidden" id="userid" value="<?php echo $_SESSION['user_Id']; ?>">
      <input type="submit" id="save" class="btn btn-success pull-right" value="Simpan">
      <a href="javascript:history.go(-1)"><button class="btn btn-success pull-left">Kembali</button></a>
    </form>
  </div>
</div>

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
</body>
<script>

$("#save").click(function(){
  var postid = $("#postid").val();
  var userid = $("#userid").val();
  var comment = $("#commenttxt").val();
  var datastring = 'postid=' + postid + '&userid=' + userid + '&comment=' + comment;
  if(!comment){
    alert("Please enter some text comment");
  }
  else{
    $.ajax({
      type:"POST",
      url: "../functions/addcomment.php",
      data: datastring,
      cache: false,
      success: function(result){
        document.getElementById("commenttxt").value=' ';
        $("#comments").append(result);
      }
    });
  }
  return false;
})

</script>
</html>
