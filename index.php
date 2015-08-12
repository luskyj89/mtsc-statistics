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
        <?php $username="multitoa_admin";$password="tasmball987";$database="multitoa_mtsc";
        mysql_connect(localhost,$username,$password);
        @mysql_select_db($database) or die( "Unable to select database");
        $query="SELECT * FROM tablename";$result=mysql_query($query);
        $num=mysql_numrows($result);mysql_close(); ?>
        <table border="0" cellspacing="2" cellpadding="2">
        <tr>
            <td>Name</td>
            <td>Wins</td>
            <td>Losses</td>
            <td>Lightweight Championships</td>
            <td>Middleweight Championships</td>
            <td>Heavyweight Championships</td>
            <td>Mains</td>
        </tr>
        <?php $i=0;while ($i < $num) {
            $f1=mysql_result($result,$i,"Name");
            $f2=mysql_result($result,$i,"Wins");
            $f3=mysql_result($result,$i,"Losses");
            $f4=mysql_result($result,$i,"Heavyweight Championships");
            $f5=mysql_result($result,$i,"Middleweight Championships");
            $f6=mysql_result($result,$i,"Lightweight Championships");
            $f7=mysql_result($result,$i,"Mains"); ?>
        <tr>
            <td><?php echo $f1; ?></td>
            <td><?php echo $f2; ?></td>
            <td><?php echo $f3; ?></td>
            <td><?php echo $f4; ?></td>
            <td><?php echo $f5; ?></td>
            <td><?php echo $f6; ?></td>
            <td><?php echo $f7; ?></td>
        </tr>
        <?php $i++;} ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/scripts.min.js"></script>

    </body>
</html>
