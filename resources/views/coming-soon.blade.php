<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Ladder Consultancy - Coming Soon</title>
    <meta name="robots" content="noindex">
    @include('inc.favicon')
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <style>
        body, html {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        background-color: #FFFFFF; /* White base */
        font-family: 'Arial', sans-serif;
        color: #424140; /* Secondary color for text */
        }

        .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 100%;
        }

        h1 {
        color: #ad8455; /* Primary color for headlines */
        margin-bottom: 10px;
        }

        p {
        margin-bottom: 20px;
        }

        .notify {
        display: flex;
        gap: 10px;
        }

        input[type=email] {
        padding: 10px;
        border: 1px solid #ad8455; /* Primary color border */
        border-radius: 5px;
        width: 250px;
        }

        button {
        padding: 10px 15px;
        background-color: #ad8455; /* Primary color */
        border: none;
        border-radius: 5px;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease;
        }

        button:hover {
        background-color: #926e43; /* Darkened primary color for hover effect */
        }

        a {
        color: #424140; /* Secondary color for links */
        text-decoration: none;
        }

        a:hover {
        text-decoration: underline;
        }
        img {
        max-height: 80px;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="/assets/img/logo/logo.png" alt="logo">
        <h1>Dream Ladder Consultancy</h1>
        <p>We are currently building our site. Stay tuned!</p>
        {{-- <div class="notify">
            <input type="email" placeholder="Enter your email to stay updated">
            <button>Notify Me</button>
        </div> --}}
        <div class="contact-info">
            <p>For inquiries, contact us:</p>
            <p><span class="icon">&#x260F;</span> <a href="tel:+919548145257">+91 95481 45257</a></p>
            <p><span class="icon">&#x2709;</span> <a href="mailto:info@dreamladderconsultancy.com">info@dreamladderconsultancy.com</a></p>
        </div>
    </div>
</body>

</html>
