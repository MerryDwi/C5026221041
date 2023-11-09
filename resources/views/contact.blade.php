<html>

<head>
    <title> WELCOME TO DAGEN CONTACT FORM </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
</head>

<body>
    <div class="container-fluid">
        <form onsubmit="sendEmail(); reset(); return false">
            <h3>Get In Touch With Dagen</h3>
            <input type="text" id="name" placeholder="Your Name" required>
            <input type="email" id="email" placeholder="Email Address" required>
            <input type="text" id="phone" placeholder="Phone No." required>
            <textarea id="message" rows="4" placeholder="How can we help you?"></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail() {
            Email.send({
                Host: "smtp.gmail.com",
                Username: "username",
                Password: "password",
                To: 'them@website.com',
                From: document.getElementById("email").value,
                Subject: "New Contact Form Enquiry",
                Body: "Name: " +document.getElementById("name").value + "<br> Email: " + document.getElementById("email").value +
                "<br> Phone no: " + document.getElementById("phone").value +
                "<br> Message: " + document.getElementById("message").value +
            }).then(
                message => alert("Message Sent Succesfull")
            );

        }
    </script>



</body>

</html>
