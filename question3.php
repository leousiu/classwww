<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Car</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" action="send.php">
        <br>
        <b>What kind of car would you like to buy?</b>
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp<input type="radio" name="typeofcar" value="proton" checked/>Proton
        &nbsp&nbsp&nbsp&nbsp<input type="radio" name="typeofcar" value="Honda"/>Honda
        &nbsp&nbsp&nbsp&nbsp<input type="radio" name="typeofcar" value="Ferrari"/>Ferrari
        &nbsp&nbsp&nbsp&nbsp<input type="radio" name="typeofcar" value="Ford"/>Ford
        <br><br><br>
        <b>What color do you want on your car?</b>
        <br><br>
        &nbsp&nbsp&nbsp&nbsp<select name="color">
            <option value="black" selected>Black</option>
            <option value="white">White</option>
            <option value="red">Red</option>
        </select>
        Other : <input type="text" placeholder="text" name="color"/>
        <br><br>
        <b>Enter other specification of your preffered car:</b><br><br>
        &nbsp&nbsp&nbsp&nbsp<textarea name="specification" rows="10" cols="40"></textarea>
        <br><br>
        <b>Tell us how to get in touch with you: </b>
        <br><br>
        &nbsp&nbsp&nbsp&nbspName&nbsp&nbsp&nbsp&nbsp <input type="text" placeholder="both names" name="names"/><br><br>
        &nbsp&nbsp&nbsp&nbspE-mail&nbsp&nbsp&nbsp <input type="text" placeholder="e-mail" name="email"/><br><br>
        &nbsp&nbsp&nbsp&nbspTel&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" placeholder="phone" name="tel"/><br><br>
        &nbsp&nbsp&nbsp&nbsp<input type="radio" name="contact"/> Please contact me as soon as possible regarding this matter.<br><br>
        &nbsp&nbsp&nbsp&nbspMy email: <a href="mailto:ezmir.razali@mmu.edu.my">ezmir.razali@mmu.edu.my</a>
        <br>
        <br>
        <input type="submit" value="Submit" name="submit"/>&nbsp
        <input type="reset" value="Clear"/>
        <br>
        <br>
    </form>
    <a href="index.php">Back to Main Page</a>
    <br>
    <br>
</body>
</html>
