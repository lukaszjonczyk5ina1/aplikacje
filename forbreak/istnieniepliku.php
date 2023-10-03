<?php
$filename = 'C:\Users\5Inagr1\Desktop\Aplikacje\projekty\foo.txt';
if(file_exists($filename)){
echo "The file $filename exits";
}else{
echo "The file $filename does not exists";
}
?>