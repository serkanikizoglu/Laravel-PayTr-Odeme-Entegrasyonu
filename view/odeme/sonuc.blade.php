<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ödeme Ekranı</title>
    <meta name="robots" content="noindex">
</head>
<body>
<!-- Ödeme formunun açılması için gereken HTML kodlar / Başlangıç -->
<script src="https://www.paytr.com/js/iframeResizer.min.js"></script>
<iframe src="https://www.paytr.com/odeme/guvenli/{{$token}}" id="paytriframe" frameborder="0" scrolling="no" style="width: 100%;"></iframe>
<script>iFrameResize({},'#paytriframe');</script>
<!-- Ödeme formunun açılması için gereken HTML kodlar / Bitiş -->
</body>
</html>
