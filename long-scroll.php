<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="created" content="2012-07-26">
<title>Long Scrolling Page</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/3.5.1/build/cssreset/reset-min.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/3.5.1/build/cssfonts/fonts-min.css">
<script type="text/javascript" src="http://yui.yahooapis.com/3.5.1/build/yui/yui-min.js"></script>
<style type="text/css">
ul:after {
    content: "";
    display: block;
    clear: both;
}
li {
    width: 238px;
    height: 238px;
    background: #eee;
    border: solid 1px #333;
    float: left;
    margin: 0 10px 10px 0;
}
</style>
</head>
<body>
    <ul>
<?php for ($i = 0, $j = 1000; $i < $j; $i++): ?>
        <li>Box (<?php echo $i; ?>)</li>
<?php endfor; ?>
    </ul>
    <script>
    YUI().use("node", function (Y) {
        Y.later(1000, null, function () {
            window.scrollBy(0 , 500);
        }, null, true);
    });
    </script>
</body>
</html>
