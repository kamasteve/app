

    <?php
    include("common.inc");
    $table_name="ppnummers";
    $connection = @mysql_connect(HOST,ADMIN, WWOORD) or die(mysql_error());
    $db = @mysql_select_db(DBNAME,$connection) or die(mysql_error());
    $sql3="SELECT * FROM $table_name ORDER BY `tafelnummer` ASC";
    $result=@mysql_query($sql3,$connection) or die("Couldn't execute query ".$sql3);
    $today = date("j-n-Y");  
    $bonnen="<table border=0>";
    $i=0;
    while ($row=mysql_fetch_array($result)) {
    	$ppnummer=$row['ppnr'];
    	$tafelnummer=$row['tafelnummer'];
    	$totverdeuros=$row['totverdeuros'];
    	$i++;		
    	if($i%4==0){$vier="class=vier";}else{$vier="";}
    	$euros=number_format(round($totverdeuros,1), 2, ',', '');
    	$bon="<tr><td><br></td></tr>
    	<table class=rond align=center border=0 width=800><col width=5%><col width=15%><col width=5%><col width=55%><col width=5%><col width=10%><col width=5%>
    	<tr><td colspan=7><br></td></tr>
    	<tr><td></td><td class=echtklein>Organisatie:</td><td class=echtklein colspan=2>".$expters."</td><td class=echtklein>Datum:</td><td class=echtklein>".$today."</td><td></td></tr>
    	<tr><td></td><td class=echtklein>CREED-experiment:</td><td class=echtklein colspan=2>".$expnummer."-".$session."</td><td class=echtklein>Tafel:</td><td class=echtklein>".$tafelnummer."</td><td></td></tr>
    	<td colspan=7 align=center><H1>KWITANTIE</H1></td></tr>
    	<tr><td></td><td colspan=5 align=left>Ondergetekende verklaart hierbij <b>".$euros."</b> euro te hebben ontvangen voor zijn/haar deelname aan het CREED-Experiment.
    	<br><br>Handtekening:<br><br><br></td><td></td></tr>
    	</table>	
    	<p ".$vier."></p>
    	";					
    	$bonnen .= $bon;			
    }
    $bonnen .= "</table></table>";
    ?>
    <html>
    <head>
    <link rel="stylesheet" type="text/css" href="boris.css" />
    <link rel="stylesheet" type="text/css" href="buttons.css" />
    </head>
    <body>
    <?php echo $bonnen; ?>
    </body>
    </html>