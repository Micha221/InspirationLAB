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
            <label for="event">
                For what event
            </label>
<br>
            <input type="text" name="event" id="event" required>
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
               Interesses
            </label>
<br>
            <input type="checkbox" name="interests" id="interests" value="dieren">
            <label for="interests-dieren">
                Dieren
            </label>
<br>
            <input type="checkbox" name="interests" id="interests" value="dieren">
            <label for="interests">
                Technologie
            </label>
<br>
            <input type="checkbox" name="interests" id="interests" value="dieren">
            <label for="interests">
                Sporten
            </label>
<br>
            <input type="checkbox" name="interests" id="interests" value="dieren">
            <label for="interests">
                Muziek
            </label>
<br>
            <input type="checkbox" name="interests" id="interests" value="dieren">
            <label for="interests">
                Reizen
            </label>
<br>
            <input type="checkbox" name="interests" id="interests" value="dieren">
            <label for="interests">
                Lezen
            </label>
<br>
            <input type="checkbox" name="interests" id="interests" value="dieren">
            <label for="interests">
                Kunst
            </label>
<br>
            <input type="checkbox" name="interests" id="interests" value="dieren">
            <label for="interests">
                Fotografie
            </label>
        </div>
<br>
        <div>
            <label>
                Hobbies
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="dieren">
            <label for="hobby-voetbal">
                Voetbal
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="dieren">
            <label for="hobby-fietsen">
                Fietsen
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Tennis">
            <label for="hobby-tennis">
                Tennis
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Badminton">
            <label for="hobby-badminton">
                Badminton
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Fitness"> 
            <label for="hobby-fitness">
                Fitness
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Dansen">
            <label for="hobby-dansen">
                Dansen
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Zwemmen">
            <label for="hobby-zwemmen">
                Zwemmen
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Mindfulness">
            <label for="hobby-mindfulness">
              Mindfulness  
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Yoga">
            <label for="hobby-yoga">
                Yoga
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Tuinieren">
            <label for="hobby-tuinieren">
                Tuinieren
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Tekenen">
            <label for="hobby-tekenen">
                Tekenen
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Koken">
            <label for="hobby-koken">
                Koken
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Instrument">
            <label for="hobby-instrument">
                Instrument bespelen
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Gamen">
            <label for="hobby-gamen">
                Gamen
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Doe het zelver">
            <label for="hobby-diy">
                Doe het zelver
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="Handwerk">
            <label for="hobby-handwerk">
                Handwerk
            </label>
<br>
            <input type="checkbox" name="hobby" id="hobby" value="andere">
            <label for="hobby-andere">
                Andere
            </label>
<br>
        </div>
<br>        
            <input type="submit" name="submit" Value="Submit"/>
    </form>
    </body>
</html>