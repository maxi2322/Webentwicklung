<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"])){
    mail("memaxi476@gmail.com", "Kontaktformular", 'Name: '.$_POST["name"]. 'Email: '.$_POST["email"]. 'Priorität' .$_POST["priorität"]. 'Nachricht: '.$_POST["message"]);
    ?>
    <h1 style="color: green;">Das Kontaktformular wurde Abgesendet!</h1>
    <?php
    }
    ?>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email"placeholder="Email" required><br>
        <select name="priorität">
            <option value="hoch">Hoch</option>
            <option value="mittel">Mittel</option>
            <option value="niedrig">Niedrig</option>
            
</select><br>
<textarea name="message" cols="80" rows="8" required></textarea>
<button type="submit" name="submit">Absenden</button>
    </form>
</body>
</html>
-------------------------------------------------------------------------------






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"])){
    mail("memaxi476@gmail.com", "Kontaktformular", 'Name: '.$_POST["name"]. 'Email: '.$_POST["email"]. 'Priorität' .$_POST["priorität"]. 'Nachricht: '.$_POST["message"]);
    ?>
    <h1 style="color: green;">Das Kontaktformular wurde Abgesendet!</h1>
    <?php
    }
    ?>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email"placeholder="Email" required><br>
        <select name="priorität">
            <option value="hoch">Hoch</option>
            <option value="mittel">Mittel</option>
            <option value="niedrig">Niedrig</option>
            
</select><br>
<textarea name="message" cols="80" rows="8" required></textarea>
<button type="submit" name="submit">Absenden</button>
    </form>
</body>
</html>