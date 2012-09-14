<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Header Information</title>
<style type="text/css">
html, body {
    padding: 0;
    margin: 0;
}
#viewport {
    background: #fff;
    width: 1280px; /* 1280px */
    height: 720px; /* 720px */
}
</style>
</head>
<body>
    <div id="viewport">
        <h1>Header Information</h1>
        <ul>
<?php
foreach ($_SERVER as $key => $value)
{
    echo "<li>$key = $value</li>\n";
}
?>
        </ul>
    </div>
</body>
</html>
