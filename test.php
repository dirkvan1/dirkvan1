<?php print "This is how I use the print command!"; ?>
<div align="center"> <?php echo "Place some PHP here!"; ?> </div>
<?php echo 'We have a customer named O\'Malley'; ?>

<?$myName = 'Dirk'; ?>
<?print "My name is: " . $myName; ?>

<div align="center"><font color="red"><?=$myName;?></font></div>

<?php $myNum = 1; ?>
<?php $myOtherNum = 3.2; ?>
<?php $myTotal = $myNum + $myOtherNum; ?>
<?php print "The total is: " . $myTotal; ?>

<?php echo "myNum contains " . $myNum . " and it's type is " . gettype($myNum) . "<br />"; ?>
<?php echo "myTotal contains " . $myTotal . " and it's type is " . gettype($myTotal) . "<br />"; ?>

