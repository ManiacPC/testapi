<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>API Example</title>
    <meta name="description" content="Ejemplo de API">
    <meta name="author" content="SitePoint">

</head>
<body>
    <form method="post" action="addComment.php">
        <h3>Write down your comment</h3>
        <label for="comment">Comment</label>
        <input type="text" name="comment" id="comment" placeholder="Write a comment"/>


        <br />
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Write down your email"/>

        <br />
        <button type="submit">Submit comment</button>
    </form>
</body>
</html>