<center>
<?php

echo "<html style=\"width: 100%;height: 100%;margin: 0; padding: 0;background-color: #f2f3f4;\"></html>";
header("Content-type: text/html; charset=utf-8");
if(isset($_GET['cok'])&&$_GET['cok']){//如果有值且不为空
    $myfile = fopen("ck.bf", "w") or die("写入失败。无法打开文件！");
    $txt = $_GET['cok'];
    fwrite($myfile, $txt);
    fclose($myfile);

echo "<div style=\"background-color: #fff;width: 500px !important;height: 50px !important;max-width: 500px;min-width: 850px;margin: 0 auto;border-radius: 25px 25px 25px 25px;   margin-top: 22rem!important;\"><div style=\"font-size: 20px;font-weight: bold;text-align: center;color: #5f6169!important;padding: .75rem 1.25rem;\">Cookie设置成功！</div>
</div>";
    header('Refresh:1.5;url=./');

}else{
echo "<div style=\"background-color: #fff;width: 500px !important;height: 50px !important;max-width: 500px;min-width: 850px;margin: 0 auto;border-radius: 25px 25px 25px 25px;   margin-top:22rem!important;\"><div style=\"font-size: 20px;font-weight: bold;text-align: center;color: #ac2b2b!important;padding: .75rem 1.25rem;\">写入失败，Cookie值为空！</div>
</div>";
    header('Refresh:1.5;url=./');
}
?>
</center>
