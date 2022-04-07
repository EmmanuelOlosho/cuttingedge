<?php
 session_start();
 include 'db.php';
 if (isset($_POST['send_mail'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $status = $_POST['status'];
    $trn_date = date('Y-m-d H:i:s');
    echo "$name, $email, $phone, $message, $trn_date, $status";
    $query = mysqli_query($con, "INSERT into users(name, email, phone, message, status, trn_date) VALUES('$name', '$email', '$phone', '$message', '$status', '$trn_date')") or die(mysqli_error($con));
    if($query){
        header('Location:index.php?i=mailsent');
    }
 }
 if (isset($_POST['send_query'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $query = $_POST['query'];
    $status = $_POST['status'];
    $trn_date = date('Y-m-d H:i:s');
    echo "$name, $email, $phone, $query, $trn_date, $status";
    $query = mysqli_query($con, "INSERT into query(name, email, phone, query, status, trn_date) VALUES('$name', '$email', '$phone', '$query', '$status', '$trn_date')") or die(mysqli_error($con));
    if($query){
        header('Location:index.php?i=querysent');
    }
 }
 if (isset($_POST['delete_mail'])){
     $id = $_POST['delete_id'];
     $query = mysqli_query($con, "DELETE FROM users WHERE id = '$id'");
     if($query){
        header('Location:mails.php');
     }
 }
 if (isset($_POST['delete_query'])){
     $id = $_POST['delete_id'];
     $query = mysqli_query($con, "DELETE FROM query WHERE id = '$id' ");
     if($query){
        header('Location:query.php');
     }
 }
 if (isset($_POST['edit_admin_details'])){
   $name = $_POST['admin_name'];
   $gender = $_POST['admin_gender'];
   $email = $_POST['admin_email'];
   $query = mysqli_query($con, "UPDATE adim SET name = '$name',  gender = '$gender', email = '$email' WHERE id = 1 ") or die(mysqli_error($con));
   if($query){
    header('Location:profile.php');
   }
 }
 if(isset($_POST['login_admin'])){
    $password = md5($_POST['password']);
    $query = mysqli_query($con, "SELECT * from adim where password = '$password' ") or die();
    if(mysqli_num_rows($query) > 0){
     $_SESSION['password'] = $password;
     header('location:cuttingdah.php');
    }
    else {
        header('location:adlogin.php?err=invalidpassword');
    }
 }
 if(isset($_POST['change_password'])){
    $old = md5($_POST['old']);
    $new = md5($_POST['new']);
    $re_new = md5($_POST['re-new']);
    $query = mysqli_query($con, "SELECT * from adim where password = '$old'");
    if(mysqli_num_rows($query) > 0){
      if ($new !== $re_new) {
        header('location:settings.php?err=passworddoesnotmatch'); 
      }
      else {
        $sql = mysqli_query($con, "UPDATE adim SET password = '$re_new' ");
        if($sql){
           header('location:settings.php');
        }
      }
    }
    else {
        header('location:settings.php?err=invalidOldpassword');
    }
 }
 if(isset($_POST['post_blog'])){
    $title = $_POST['title'];
    $content = mysqli_real_escape_String($con, $_POST['content']);
    $trn_date = date('D, M Y');
    echo "$title, $content, $trn_date";
    $query = mysqli_query($con, "INSERT into blog(title, content, trn) VALUES ('$title', '$content', '$trn_date')") or die(mysqli_error($con));
    if($query){
        header('Location:blg.php');
    }
    else {
       header('Location:blg.php?err=somethingwentwrong');
    }
 }
 if(isset($_POST['edit_blog'])){
    $title = $_POST['edi_title'];
    $id = $_POST['edi_id'];
    $content = $_POST['edi_content'];
    $trn_date = date('D, M Y');
    echo "$title, $content, $trn_date";
    $query = mysqli_query($con, "UPDATE blog SET title = '$title', content = '$content', trn = '$trn_date' where id = '$id'") or die(mysqli_error($con));
    if($query){
        header('Location:blg.php');
    }
    else {
       header('Location:blg.php?err=somethingwentwrong');
    }
 }
 if (isset($_POST['delete_blog'])){
     $id = $_POST['edit_id'];
     $query = mysqli_query($con, "DELETE FROM blog WHERE id = '$id'");
     if($query){
        header('Location:blg.php');
     }
 }
   if(isset($_POST['post_comm'])){
     $id = $_POST['id'];
     $title = $_POST['title'];
     $name = $_POST['name'];
     $comment = $_POST['comment'];
     $trn_date = date('d-m-y H:i:s');
     $query = mysqli_query($con, "INSERT into comments(title, name, comment, trn_date) VALUES ('$title', '$name', '$comment', '$trn_date')") or die(mysqli_error($con));
     if($query){
        header("location:news.php?id=$id");
     }
    }
?>
