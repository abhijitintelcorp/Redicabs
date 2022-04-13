<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Venom Button WhatsApp Click To Chat Example</title>
    <link href="/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="venom-button.min.css">
    <script type="text/javascript" src="venom-button.min.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            background-image: radial-gradient(circle at 91% 26%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 3%, transparent 3%, transparent 100%), radial-gradient(circle at 27% 63%, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0.02) 3%, transparent 3%, transparent 100%), radial-gradient(circle at 59% 48%, rgba(255, 255, 255, 0.01) 0%, rgba(255, 255, 255, 0.01) 3%, transparent 3%, transparent 100%), radial-gradient(circle at 58% 65%, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0.02) 3%, transparent 3%, transparent 100%), radial-gradient(circle at 55% 21%, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0.02) 3%, transparent 3%, transparent 100%), radial-gradient(circle at 88% 4%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 7%, transparent 7%, transparent 100%), radial-gradient(circle at 9% 23%, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0.02) 7%, transparent 7%, transparent 100%), radial-gradient(circle at 40% 78%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 7%, transparent 7%, transparent 100%), radial-gradient(circle at 78% 5%, rgba(255, 255, 255, 0.01) 0%, rgba(255, 255, 255, 0.01) 7%, transparent 7%, transparent 100%), radial-gradient(circle at 11% 87%, rgba(255, 255, 255, 0.01) 0%, rgba(255, 255, 255, 0.01) 7%, transparent 7%, transparent 100%), radial-gradient(circle at 11% 24%, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0.02) 7%, transparent 7%, transparent 100%), radial-gradient(circle at 18% 75%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 7%, transparent 7%, transparent 100%), radial-gradient(circle at 71% 80%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 7%, transparent 7%, transparent 100%), radial-gradient(circle at 34% 79%, rgba(255, 255, 255, 0.01) 0%, rgba(255, 255, 255, 0.01) 5%, transparent 5%, transparent 100%), radial-gradient(circle at 9% 51%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 5%, transparent 5%, transparent 100%), radial-gradient(circle at 46% 69%, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0.02) 5%, transparent 5%, transparent 100%), radial-gradient(circle at 54% 90%, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0.02) 5%, transparent 5%, transparent 100%), radial-gradient(circle at 55% 58%, rgba(255, 255, 255, 0.01) 0%, rgba(255, 255, 255, 0.01) 5%, transparent 5%, transparent 100%), radial-gradient(circle at 95% 37%, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0.02) 5%, transparent 5%, transparent 100%), radial-gradient(circle at 9% 4%, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0.02) 5%, transparent 5%, transparent 100%), linear-gradient(135deg, rgb(249, 93, 202), rgb(11, 13, 179));
        }

        h1 {
            margin: 150px auto;
            text-align: center;
            color: #fff;
        }

        p {
            font-size: 1.5rem;
            color: #fff;
            text-align: center;
        }
    </style>
</head>

<script type="text/javascript">
    $('#myButton').venomButton({
        phone: '5521990000000',
        popupMessage: 'Hello, how can we help you?',
        message: "I'd like to order a pizza",
        showPopup: true,
        position: "right",
        linkButton: false,
        showOnIE: false,
        headerTitle: 'Welcome!',
        headerColor: '#25d366',
        backgroundColor: '#25d366',
        buttonImage: '<img src="whatsapp.svg" />'
    });
</script>

</html>