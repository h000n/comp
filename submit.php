<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $code = $_POST['code'];

    // do something with the code here, for example:
    $filename = 'submitted_code.py';
    file_put_contents($filename, $code);

    echo 'Your code has been submitted successfully!';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Submit Code</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Rules</a></li>
                <li><a href="#">Submit</a></li>
            </ul>
        </nav>
        <h1>Submit Your Code</h1>
    </header>
    <main>
        <section class="form">
            <h2>Code Submission Form</h2>
            <form method="post" action="submit.php">
                <label for="code">Paste Your Python Code:</label>
                <textarea name="code" id="code" rows="10" cols="80"></textarea>
                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
    <footer>
        &copy; Database Comp
    </footer>
</body>
</html>
