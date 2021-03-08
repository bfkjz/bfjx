<?php
header("Content-type:text/html;charset=utf-8;");
//取出前台提交地址
$url = $_POST['downurl'];
//判断是否是千图网的链接
if (preg_match('/58pic\.com/i',$url)) {
    //正则取出千图网素材链接的ID
    preg_match('~/(\\d+)\\.html~i', $url, $tmp);
    if (empty($tmp[1])) {
        die('链接不正确');
    }
$ck = file_get_contents("set/ck.bf");
setcookie("TestCookie", $value, time()+3600*2400); 

    $url = "https://dl.58pic.com/".$tmp[1].".html";
    $header = array("Host:dl.58pic.com",
        'Content-Type:application/x-www-form-urlencoded',
        $ck,//这里填写你自己的会员帐号的COOKIE
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36');
    $html = curl_get($header, $data,$url);
    //正则取出下载地址
    preg_match('/data-mark-header="e_c_w_2" attr-type="a1" href="(.*?)\"/', $html, $href);
    if (!empty($href['1'])) {
 echo '<div class="logo" onclick="window.open("http://binfen23.gitee.io")"></div>';
       echo '<br>';
       echo '<br>';
 echo '<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="80%" color=#d7d7d7 SIZE=2>';

 echo '<div style="margin:7vh auto auto auto;text-align:center;vertical-align:middle;"><p class="ecp">解析成功!</p><br><a onclick="dl()" class="down-btn tp-down-btn" data-sm-link-text="点击下载" target="_blank"><span>立即下载</span></a><br><p>（如果长时间没跳转尝试复制下面链接手动下载）</p></div>';
        echo '<br>';
        echo '<br>';
echo '<div  style="margin:4vh auto auto auto;text-align:center;vertical-align:middle;" width="122px" height="42px" ><a href="#" onClick="javascript :history.back(-1);"><img src="https://cdn.jsdelivr.net/gh/bfkjz/image/img/20201224133210.gif" width="122px" height="42px"  title="返回解析页面" cursor: pointer; alt=""/></a></div>';

        echo '<br>';
        echo '<br>';
        echo($href['1']); //获取下载地址成功了，返回前台下载地址

      //echo '<script language="javascript">location.href="' . $href['1'] . '"; </script>';

       echo '
<script language="javascript">

			function dl(){
					location.href="' . $href['1'] . '";}

	     </script>';


    } else {

 echo '<div class="logo" onclick="window.open("http://binfen23.gitee.io")">
</div>';
       echo '<br>';
       echo '<br>';
 echo '<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="80%" color=#d7d7d7 SIZE=2>';

 echo '<div style="margin:7vh auto auto auto;text-align:center;vertical-align:middle;"><p class="ecp">解析失败，频繁解析导致官方出现验证码，需到官网验证后才可使用。</p>&nbsp<p>（如无验证码则Cokie失效）</p></div>';

echo '<div  style="margin:8vh auto auto auto;text-align:center;vertical-align:middle;" width="122px" height="42px" ><a href="#" onClick="javascript :history.back(-1);"><img src="https://cdn.jsdelivr.net/gh/bfkjz/image/img/20201224133210.gif" width="122px" height="42px"  title="返回解析页面" cursor: pointer; alt=""/></a></div>';
 
    }
} else {
 echo '<div class="logo" onclick="window.open("http://binfen23.gitee.io")">
</div>';
       echo '<br>';
       echo '<br>';
 echo '<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="80%" color=#d7d7d7 SIZE=2>';
 echo '<div style="margin:7vh auto auto auto;text-align:center;vertical-align:middle;"><p class="ecp">链接不正确</p></div>';

echo '<div  style="margin:8vh auto auto auto;text-align:center;vertical-align:middle;" width="122px" height="42px" ><a href="#" onClick="javascript :history.back(-1);"><img src="https://cdn.jsdelivr.net/gh/bfkjz/image/img/20201224133210.gif" width="122px" height="42px"  title="返回解析页面" cursor: pointer; alt=""/></a></div>';

}

function curl_get($header,$data,$url) {
    $ch = curl_init();
    $res = curl_setopt ($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt ($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
    $result = curl_exec ($ch);
    curl_close($ch);
    return $result;
}




echo '<div class="footer">
<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="80%" color=#d7d7d7 SIZE=2>
<p>Powered by <a href="https://binfen23.gitee.io" style="text-decoration:none;" target="_blank" title="访问个人博客">Zeb</a></p>
&nbsp
<p>|</p>
&nbsp
<p>访问>> <a href="https://www.58pic.com/" style="text-decoration:none;" target="_blank" title="访问千图网">千图网</a></p>

</div>

<style>
.footer{
position: fixed;bottom: 0;
width:100vw;
text-align:center;vertical-align:middle;
font-size: 12px;
font-weight: bold;
background: #f2f2f2;
}

a{color:#000;font-size: 13px;}a:hover{color:#2b9ed9}

p{color:#b8b9b9;display:inline-table}

p.ecp{
font-size: 20px;
color:#000;
font-weight: bold;
display:inline-table;
}


.logo{	
	width:250px;
	height:80px;
margin:15vh auto auto auto;
cursor: pointer;

background-image: url(https://cdn.jsdelivr.net/gh/bfkjz/image/img/20201224105918.png);

}


   .tp-down-box{
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
    }
    .down-btn {
      letter-spacing: 0.1em;
      cursor: pointer;
      font-size: 14px;
      font-weight: 700;
      line-height: 45px;
      width: 23%;
      max-width: 160px;
      text-decoration: none;
      text-transform: uppercase;
      margin: 5px;
    }
    .down-btn:hover {
      text-decoration: none;
    }
    .tp-down-btn {
      --uismLinkDisplay: var(--smLinkDisplay, inline-flex);
      display: var(--uismLinkDisplay);
      color: #fff;
      border: 2px solid #000;
      border-radius: 10px;
  background-color: #3c88a5;
      position: relative;
      transition-duration: 0.4s;
      overflow: hidden;
      text-align: center;
    }
    .tp-down-btn::before,
    .tp-down-btn span{
      margin: 0 auto;
      transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
      transition-duration: 0.4s;
    }
    .tp-down-btn:hover{
      background-color: #43bba0;
    }
    .tp-down-btn:hover span{
      -webkit-transform: translateY(-400%) scale(-0.1,20);
      transform: translateY(-400%) scale(-0.1,20);
    }
    .tp-down-btn::before{
      content: attr(data-sm-link-text);
      color: #FFF;
      position: absolute;
      left: 0;
      right: 0;
      margin: auto;
      -webkit-transform: translateY(500%) scale(-0.1,20);
      transform: translateY(500%) scale(-0.1,20);
    }
    .tp-down-btn:hover::before{
        letter-spacing: 0.05em;
        -webkit-transform: translateY(0) scale(1,1);
        transform: translateY(0) scale(1,1);
    }
    @media screen and (max-width: 1198px){
      .down-btn{
          width: 45%;
      }
    }
</style>

'
?>