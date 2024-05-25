<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/home" method="POST">
        @csrf
        <label for="fnama">First name:</label><br /><br />
        <input type="text" id="" name="fname" /><br /><br />
        <label for="lname">Last name:</label><br /><br />
        <input type="text" id="" name="lname" /><br /><br />

        <label for="pesan">Gender: </label><br /><br />
        <input type="radio" id="" value="male" />Male <br />
        <input type="radio" id="" value="female" />Female<br />
        <input type="radio" id="" value="other" />Other<br /><br />

        <label>Nationality:</label><br /><br />
        <select name="nationality">
            <option value="1">Indonesian</option>
            <option value="2">Thai</option>
            <option value="3">British</option>
        </select><br /><br />

        <label>Language Spoken:</label><br /><br />
        <input type="checkbox" name="ls" id="" value="1" />Bahasa<br />
        <input type="checkbox" name="ls" id="" value="2" />English<br />
        <input type="checkbox" name="ls" id="" value="3" />Other<br /><br />

        <label>Bio:</label><br /><br />
        <textarea name="bio" rows="10" cols="30"></textarea><br />
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>