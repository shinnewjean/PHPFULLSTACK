<?php

    $count = 100;
    $ok = 27;

    
    $result = $ok / $count * 100;
?>

<!doctype html>
<html lang="ko">
	<head>
	<meta charset="utf-8">
		<title>HTML</title>
	</head>
	<body>
		<div>
			<progress value="<? echo round($result) ?>" max="100"></progress>
			<? echo round($result)."%" ?>
		</div>
	</body>
</html>