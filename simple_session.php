<html>
<body>
<?php
session_start();
$name = "";
if (!isset($_SESSION["bananas"])){
    
    $_SESSION["bananas"] = 1;
    $_SESSION["recent_bunch"] = 1;
} else {
    $this_bunch = rand(1,5);
    $_SESSION["bananas"] += $this_bunch;
    $_SESSION["recent_bunch"] = $this_bunch;
}
echo "<p>You found a bunch of bananas containing ".$_SESSION["recent_bunch"]." bananas.</p>";
echo "<p>Your total is now: ".$_SESSION["bananas"]." bananas.  You lucky $name you.</p>";
setcookie("adam", "rules");
print_r($_COOKIE);
echo "<p> \n <p>";
print_r($_SESSION);
?>
<p>
    <form method="post" action="<?php echo htmlspecialchars($_SESSION["PHP_SELF"]);?>"> 
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <input type="submit" name="submit" value="Submit"> 
    </form>
</p>
<?php?
    echo $name;
>
</body>
</html>