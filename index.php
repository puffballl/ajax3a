<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kies je randos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Kies maar iemand</h1>
<form action="getuser.php">
    <label>
        <select name="users" onchange="showUser(this.value)">
            <option value="">Kies maar iemand:</option>
            <option value="1">Peter Griffin</option>
            <option value="2">Lois Griffin</option>
            <option value="3">Lois Lane</option>
            <option value="4">Jhon Doe</option>
            <option value="5">Bat Man</option>
            <option value="6">Media College</option>

        </select>
    </label>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

<script src="script.js"></script>
</body>
</html>
