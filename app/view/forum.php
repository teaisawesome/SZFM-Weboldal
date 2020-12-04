<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SZFM - Fórum</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/forum.css">
</head>
<body>
    <div id="new-comment-form">
        <form action="api/postforumcomment" method="post">
            <span id="greeting">Értékeld az [insert Company Name]-et!</span>
            <textarea name="comment" id="ta-comment" rows="10" ></textarea>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
    <div id="content"></div>
    <script src="assets/js/forum.js"></script>
</body>
</html>

