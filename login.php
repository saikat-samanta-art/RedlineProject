<?php require_once('header.php'); ?>

<?php

if(isset($_POST['submit'])){
  $team_id = $_POST['team_id'];
  $res = $conn->query("SELECT ID FROM team WHERE ID='$team_id'");
  if($res->num_rows > 0){
    $_SESSION['team_id'] = $team_id;
    header("location: player-signup.php?team_id=$team_id");
  } else $stat = 'Group is not exist';
}
?>

<div class="login-wrapper">
  <?php include_once('login-header.php'); ?>

  <div class="login-banner text-center">
    <a href="<?php echo URL; ?>" class="d-block">
      <img style="border-radius: 50%" height="100" width="300" src="<?= URL; ?>/images/logo_1.png" alt="Logo"/>
    </a>
  </div>
</div>

<style>
  .login-banner {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-top: 20px; /* Adjust margin as needed */
  }
  .btn {
  	background-color:#03a9f4;
  }
</style>


<?php require_once('footer.php'); ?>