<html>
<head>
    <meta charset="UTF-8">
    <title>Hello Vue</title>
    <link rel="stylesheet" href="css/app.css"/>
    <script type="text/javascript">
        window.Laravel = window.Laravel || {};
        window.Laravel.csrfToken = "{{csrf_token()}}";
    </script>
</head>
<body>
<h1>Index</h1>
<div id="app">

<my-component></my-component>
    
</div>
<script src="js/app.js"></script>
</body>
</html>