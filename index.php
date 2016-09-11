<!DOCTYPE html>
<html>
<header>
	<?php include ("header.php"); ?>
</header>
<head>
	<title>Dans la peau d'un cornac</title>
</head>
<body>

	<?php include ("tableau.php"); ?>

<table border ="1">
<?php
for ($i = 0; $i <= 3; $i++)
{
	?>

	<tr>
	<?php
	for ($j = 1; $j <= 4; $j++)
	{
		?>
		<td> <?php echo $spectacle[$i][$j]; ?> </td >
		<?php
	}
	?>
	</tr>
	<?php
}
?>
</table>

</body>
<footer>
	<?php include ("footer.php"); ?>
</footer>
</html>

