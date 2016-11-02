<!DOCTYPE html>
<html>
<head>
    <title>Error <?= $code ?>: <?= $message ?></title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
    <style>
        html, body {
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            padding: 0;
            margin: 0;
        }
        .center { text-align: center }
        h1 { font-size: 64pt; font-weight: 100 }
        h2 { font-size: 28pt; font-weight: 100 }
        .error {
            box-sizing: border-box;
        }
        .error .title {
            padding: 8px 0;
            background: rgba(92,0,0,0.8);
            font-weight: 300;
            color: #eeeeee;
        }
        .error .title b {
            font-weight: 600;
        }
        .error .stacktrace {
            padding: 8px 16px;
            text-align: left;
            white-space: pre;
            font-family: monospace;
            font-size: 10pt;
        }
    </style>
</head>
<body>
<div class="center">
    <h1>Oops!</h1>
    <h2>Seems like something went wrong :(</h2>
    <div class="error">
        <div class="title"><b><?= $title ?>:</b> <?= $message ?></div>
    </div>
</div>
</body>
</html>
