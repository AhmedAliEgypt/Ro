<?php
$token = "توكن من بوت @botfather";
$admin = ايديك;
if(isset($_POST['submit'])){
$url = $_POST['url'];
$videoid = $url;

}
?>
<html>
<body>
<h2>اهلا بك في مراسله المطور سجاد العراقي</h2>
<div>
<form method="post"  action="">
<input type="text"  name="url"  placeholder="قم بكتابه رسالتك هنا " width="250" >
<div></div>
    <input type="submit" name="submit" width="250">
    </form>
    
<div class="thumbnail">
<?php
if(! empty($videoid)){


?>
<h3>تم ارسال رسالتك</h3>

<?php
file_get_contents("https://api.telegram.org/bot$token/sendmessage?chat_id=".$admin."&parse_mode=markdown&text=".urlencode($url));
    
}
?>
</div>
</div>
<body>
<html>
