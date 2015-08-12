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
        <?php $username=" ";$password=" ";$database=" ";
        mysql_connect(localhost,$username,$password);
        @mysql_select_db($database) or die( "Unable to select database");
        $query="SELECT * FROM Statistics ORDER BY wins DESC";
        $result=mysql_query($query);
        $num=mysql_num_rows($result);
        mysql_close(); ?>

        <?php echo "Total MTSC Fighters: $num" ; ?>
        <table border="0" cellspacing="2" cellpadding="2">
        <tr>
            <td>Rank</td>
            <td>Name</td>
            <td>Wins</td>
            <td>Losses</td>
            <td>Lightweight Championships</td>
            <td>Middleweight Championships</td>
            <td>Heavyweight Championships</td>
            <td>Mains</td>
        </tr>

        <?php
        $i = 1;
        while ($row = mysql_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['wins']; ?></td>
                <td><?php echo $row['losses']; ?></td>
                <td><?php echo $row['heavy-champs']; ?></td>
                <td><?php echo $row['middle-champs']; ?></td>
                <td><?php echo $row['light-champs']; ?></td>
                <td><?php echo $row['mains']; ?></td>
            </tr>
        <?php
            $i++;
        }
        ?>



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/scripts.min.js"></script>

    </body>
</html>
