<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Account Deletion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <!-- Contact Us Section -->
        <header class="text-center mb-5">
            <h1>Contact Us</h1>
            <p class="lead">We are here to help! Reach out to us below.</p>
        </header>

        <section class="mb-5">
            <h2>Contact Form</h2>
            <p>If you have any questions or need assistance, feel free to contact us using the form below:</p>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </section>

        <!-- Account Deletion Section -->
        <section class="mt-5">
            <h2>Request Account Deletion</h2>
            <p>If you wish to delete your account, please provide your details below. Our support team will process your request as soon as possible.</p>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="delete-name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="delete-name" name="delete-name" required>
                </div>
                <div class="mb-3">
                    <label for="delete-email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="delete-email" name="delete-email" required>
                </div>
                <div class="mb-3">
                    <label for="reason" class="form-label">Reason for Deletion</label>
                    <textarea class="form-control" id="reason" name="reason" rows="4" required></textarea>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="confirm-deletion" required>
                    <label class="form-check-label" for="confirm-deletion">
                        I confirm that I want to permanently delete my account.
                    </label>
                </div>
                <button type="submit" class="btn btn-danger mt-3">Request Account Deletion</button>
            </form>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
