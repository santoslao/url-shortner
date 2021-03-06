<!-- 
URL SHORTNER Designed and Developed by HRWNdR
Developer: Harwinder Singh
Version: v1.0
Facebook/iamhrwndr
Github/hrwndr
-->
<?php include 'main.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $sitename; ?> | URL SHORTNER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="theme-color" content="#333333">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/gh/hrwndr/animate@v1.1/animate.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Seaweed+Script" rel="stylesheet" />
        <link rel="icon" href="https://i.imgur.com/MZ8k2Dp.png" />
    </head>
    <body class="fade-in-ii">
        <form class="form-wrapper cf" method="post" action="" >
            <font size="8" style="font-family: 'Seaweed Script', cursive;" alt="URL SHORTNER by HRWNdR"><?php echo $sitename; ?></font><p />
            <input type="text" class="textarea" name="textarea" autocomplete="off" placeholder="Enter Your Link Here..." required>
            <button type="submit" class="sbtn" name="shrt">SHORT IT!</button>
        </form>
        <div class="byline"><p>URL Shortner Designed and Developed by <a href="http://www.facebook.com/iamhrwndr">HRWNdR</a></p></div>
    </body>
</html>
