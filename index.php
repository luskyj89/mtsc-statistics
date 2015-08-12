<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/styles.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <?php$username="multitoa_jag";$password="Ifgtsts987";$database="multitoa_mtsc";
        mysql_connect(localhost,$username,$password);
        @mysql_select_db($database) or die( "Unable to select database");
        $query="SELECT * FROM tablename";$result=mysql_query($query);
        $num=mysql_numrows($result);mysql_close();?>
        <table border="0" cellspacing="2" cellpadding="2">
        <tr>
        <td>
        <font face="Arial, Helvetica, sans-serif">Name</font>
        </td>
        <td>
        <font face="Arial, Helvetica, sans-serif">Wins</font>
        </td>
        <td>
        <font face="Arial, Helvetica, sans-serif">Losses</font>
        </td>
        <td>
        <font face="Arial, Helvetica, sans-serif">Lightweight Championships</font>
        </td>
        <td>
        <font face="Arial, Helvetica, sans-serif">Middleweight Championships</font>
        </td>
        <td>
        <font face="Arial, Helvetica, sans-serif">Heavyweight Championships</font>
        </td>
        <td>
        <font face="Arial, Helvetica, sans-serif">Mains</font>
        </td>
        </tr>
        <?php$i=0;while ($i < $num) {$f1=mysql_result($result,$i,"field1");
        $f2=mysql_result($result,$i,"field2");$f3=mysql_result($result,$i,"field3");
        $f4=mysql_result($result,$i,"field4");$f5=mysql_result($result,$i,"field5");
        $f6=mysql_result($result,$i,"field6");$f7=mysql_result($result,$i,"field7");?>
        <tr>
        <td>
        <font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
        </td>
        <td>
        <font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
        </td>
        <td>
        <font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font>
        </td>
        <td>
        <font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font>
        </td>
        <td>
        <font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font>
        </td>
        <td>
        <font face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font>
        </td>
        <td>
        <font face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font>
        </td>
        </tr>
        <?php$i++;}?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/scripts.min.js"></script>

    </body>
</html>
