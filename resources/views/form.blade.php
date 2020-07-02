<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Buat Account Baru</title>
</head>

<body>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>
    <form action="\welcome" method="post" id="form">
        @csrf
        <label for="firstname">First name:</label>
        <br><br>
        <input type="text" name="firstname" id="firstname" required>
        <br><br>
        <label for="lastname">Last name:</label>
        <br><br>
        <input type="text" name="lastname" id="lastname" required>
        <br>

        <p>Gender:</p>
        <input type="radio" name="gender" id="male" required>
        <label for="male">Male</label>
        <br>
        <input type="radio" name="gender" id="female" required>
        <label for="female">Female</label>
        <br>
        <input type="radio" name="gender" id="other" required>
        <label for="other">Other</label>
        <br><br>

        <label for="nationality">Nationality:</label>
        <br><br>
        <select name="nationality" id="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select>
        <br>

        <p>Language Spoken:</p>
        <input type="checkbox" id="bahasa" name="bahasa" value="Bahasa Indonesia">
        <label for="bahasa">Bahasa Indonesia</label>
        <br>
        <input type="checkbox" id="english" name="english" value="English">
        <label for="english">English</label>
        <br>
        <input type="checkbox" id="other" name="other" value="Other">
        <label for="other">Other</label>
        <br>

        <p>Bio:</p>
        <textarea name="comment" form="form" cols="30" rows="10" required></textarea>
        <br>
        <button type="submit" name="submit">Sign Up</button>
    </form>
</body>

</html>