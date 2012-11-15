<?php
error_reporting(0);
echo '<form method="post" action="test_douban.php">
    <input name="book" />
    <input type=submit value="提交" />

</form><p>Example: [ 9787111126768 ] :获取该ISBN图书详细参考信息</p>';
header("Content-type: text/html; charset=utf-8");//中文支持。
 $book=$_POST['book'];
$url = 'http://api.douban.com/book/subject/isbn/'.$book;//影片对应的API地址。
$xml =  simplexml_load_file($url); //解析XML文件形式的返回结果。

     //用来获取书籍的图片
      foreach ($xml->children() as $item){

        if($item[@rel] == 'image'){

        echo "<p><br><img src=". $item[@href]. ">".'<br>';
        $bookPic = $item[@href];
        } 
    }
 echo '封面 '.$bookPic;
 echo '<br>';
//调用children函数获取db命名空间下的节点数组。
$db_xml = $xml->children('http://www.douban.com/xmlns/');
//var_dump($db_xml); //db命名空间只包含attribute节点和tag节点。
foreach($db_xml->attribute as $obj){//遍历所有<db:attribute />节点。
	print "db:attribute数据信息: ";
	$attrname = $obj->attributes();//调用attributes()函数获取内部属性数组。
	foreach($attrname as $key=>$value){//遍历当前节点的所有内部属性。
		print "=>" . $value . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	}
	print $obj . "<br>";
}
?>