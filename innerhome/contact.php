<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css./styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="contact-form">
        <h2>Contact Us</h2>
        <?php
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 'success') {
                echo "<p>Your message has been sent successfully!</p>";
            } elseif ($_GET['status'] == 'error') {
                echo "<p>There was an error sending your message. Please try again.</p>";
            }
        }
        ?>
        <form action="action.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <input type="submit" value="Send">
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
