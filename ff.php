if($count==sizeof($reg))
header('Location:addlist.php?count=1');
elseif ($count<sizeof($reg) && $count!=0)
header('Location:addlist.php?count=2');
if ($count1==sizeof($reg))
header('Location:http:addlist.php?count1=1');
elseif ($count1<sizeof($reg) && $count1!=0)
header('Location:http:addlist.php?count1=2');
else
header('Location:http:addlist.php?count1=0');