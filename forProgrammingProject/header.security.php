<?php
if(isset($_SESSION["userid"]))
{
?>
 <p>Hello <b><?php echo $_SESSION["useruid"];?></b> </p>
<?php
}
else
{
?>
die();
<?php
}
?>
