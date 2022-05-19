<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add person</title>
    </head>
    <body>
        <h1>
            Add person
        </h1>
        <form method="GET" action="addP.php">   
        <div>
            <label for="name">
                Name
            </label>
<br>
            <input type="text" name="name" id="name" required>
        </div>
<br>
    <div>
        <label for="birthdate">
            event date
        </label>
<br>
        <input type="date" name="birthdate" id="birthdate" required>
    </div>
<br>
    <label for="gender">
                Gender
            </label>
    <div>
        <input type="radio" name="gender" value="Female">
        <label for="form-gender-female" required>
            Female
        </label>
    <br>
        <input type="radio" name="gender" value="Male">
        <label for="form-gender-male">
            Male
        </label>
<br>
        <input type="radio" name="gender" value="Non binary">
        <label for="form-gender-Non binary">
            Non binary 
        </label>
        </div>
<br>        
        <div>
            <label>
               Interest: 
               <input type="text" name="interest" id="interest" required>
            </label>
<br>

<br>        
            <input type="submit" name="submit" Value="Submit"/>
    </form>
    </body>
</html>