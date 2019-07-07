<html>
<head>
	<title>vapost</title>
</head>
<body>

<?php
// Input postcode return boolean
function va_post($post_code)
{
    $result = true;
    return $result;
}


// test
if (va_post(222)) {
	echo "result is true";
}else{
	echo "result is false";
}

?>
</body>
</html>
