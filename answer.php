<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>

	

<?
	
	
	$sno=$_GET["sno"];
	$sname=$_GET["sname"];
	$sdate=$_GET["sdate"];
	$question=$_GET["question"];


	
	echo "<br><br>";
	echo "<p><h3><center>[<b>$sname</b>]학생의 [<b>$sdate</b>]주차 질문내역입니다.</p><br>";
	echo "<br><br>";
	echo "<table width='300' height='100' border=1 cellpadding=3 align=\center\">\n";
	echo "<tr bgcolor=\"#cccccc\">";
	echo "<th>학번</th><th>이름</th><th>주차</th>";
	echo "</tr>\n";
	
	echo "<tr>\n";
	echo "<td align=\"center\">$sno</td>\n";
	echo "<td align=\"center\">$sname</td>\n";
	echo "<td align=\"center\">$sdate</td>\n";
	echo "</tr>\n";
	echo "</table>";
	
	echo "<table width='300' height='150' border=1 cellpadding=3 align=\center\">\n";
	echo "<tr bgcolor=\"#cccccc\">";
	echo "<th>질문내용</th>";
	echo "</tr>\n";
	
	echo "<tr>\n";
	echo "<td align=\"center\"><pre>$question</pre></td>\n";
	echo "</tr>\n";
	echo "</table>";
	echo "</center>";
	
	
?>


	<form action="answersave.php" method="POST">
	
	
	<br>
	<center>
	<h3>답변하기</h3>
	<pre><textarea name=answer rows=10 cols=50> </textarea></pre>
	<input type="hidden" name="sno" 		value="<? echo $sno ?>" >
	<input type="hidden" name="sname" 		value="<? echo $sname ?>" >
	<input type="hidden" name="sdate" 		value="<? echo $sdate ?>" >
	<input type="hidden" name="question" 	value="<? echo $question ?>" >
	
	
	
	
		
	<br><br>
	
	<input type=submit value="저장하기">
	</form>
	</center>
	
	
	
	
	
	
</body>
</html>













