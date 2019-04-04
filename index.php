<?php 

require 'vendor/autoload.php';

$variable = file_get_contents("variable.less");
$primaryColor = 'tomato';
$myvariable = "

@primaryColor: {$primaryColor};

";

$style = file_get_contents("style.less");

$all_style = $variable . $myvariable . $style ;
$less = new lessc;
$less->setFormatter("compressed");
$all_style =  $less->compile($all_style);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<code>
		<pre>
			<?php echo $all_style; ?>
		</pre>
	</code>
</body>
</html>


