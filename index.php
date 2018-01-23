<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBrilliantIdeas</title>
    <link href="./style.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1><strong>My Brilliant Ideas</strong></h1>

<?php
if(!empty($_POST['content'])) {
    $my_file = 'file.txt';
    $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    $data = '<p>' . $_POST['content'] . '</p>';
    fwrite($handle, $data);
}
?>

<form method="POST">
    <textarea name="content" placeholder="Please input your text here"></textarea>
    <input type="submit" value="save" style="display:inline;">
</form>

<div class="file">
<?php
$my_file = 'file.txt';
$handle = fopen($my_file, 'r');
$data = fread($handle,filesize($my_file));
echo $data;
?>
</div>

</body>

<footer>
    2018 &nbsp; GSD (GET SHIT DONE) Consulting
</footer>


</html>