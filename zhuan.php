<?php
header("content-type:text/html;charset=utf-8");
$yu= $_POST['yu'];
?>
<!-- <audio autoplay="autoplay">
<source src="http://tts.baidu.com/text2audio?lan=zh&ie=UTF-8&spd=2&text=<?php echo $yu ?>" type="audio/mpeg">
<embed autostart="true" height="0" width="0" src="http://tts.baidu.com/text2audio?lan=zh&ie=UTF-8&spd=2&text=<?php echo $yu ?>">
</audio> -->

<video controls="controls" width="300px" height="200px" id="mp4">
<source src="http://tts.baidu.com/text2audio?lan=zh&ie=UTF-8&spd=2&text=<?php echo $yu ?>" type="audio/mpeg">
</video>
