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
        <form method="GET" action="personAdded.html">
        <div>
            <label for="form-firstname">
                Firstname
            </label>
<br>
            <input type="text" name="Firstname" id="Firstname" required>
        </div>
<br>
        <div>
            <label for="form-lastname">
                Lastname
            </label>
<br>
            <input type="text" name="lastname" id="Lastname" required>
        </div>
<br>
    <div>
        <label for="form-dob">
            Date of birth
        </label>
<br>
        <input type="date" name="Date of birth" id="form-dob" required>
    </div>
<br>
    <div>
        <input type="radio" name="Geslacht" value="Female">

        <label for="form-gender-female" required>
            Female
        </label>

    <br>

        <input type="radio" name="Geslacht" value="Male">

        <label for="form-gender-male">
            Male
        </label>

<br>

        <input type="radio" name="Geslacht" value="Non binary">

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
            <input type="checkbox" name="Dieren" id="form-interesses">
            <label for="form-interesses">
                Dieren
            </label>
<br>
            <input type="checkbox" name="Technologie" id="form-interesses">
            <label for="form-interesses">
                Technologie
            </label>
<br>
            <input type="checkbox" name="Sporten" id="form-interesses">
            <label for="form-interesses">
                Sporten
            </label>
<br>
            <input type="checkbox" name="Muziek" id="form-interesses">
            <label for="form-interesses">
                Muziek
            </label>
<br>
            <input type="checkbox" name="Reizen" id="form-interesses">
            <label for="form-interesses">
                Reizen
            </label>
<br>
            <input type="checkbox" name="Lezen" id="form-interesses">
            <label for="form-interesses">
                Lezen
            </label>
<br>
            <input type="checkbox" name="Kunst" id="form-interesses">
            <label for="form-interesses">
                Kunst
            </label>
<br>
            <input type="checkbox" name="Fotografie" id="form-interesses">
            <label for="form-interesses">
                Fotografie
            </label>
        </div>
<br>
        <div>
            <label>
                Hobbies
            </label>
<br>
            <input type="checkbox" name="Voetbal" id="form-hobbies">
            <label for="form-hobbies-voetbal">
                Voetbal
            </label>
<br>
            <input type="checkbox" name="Fietsen" id="form-hobbies">
            <label for="form-hobbies-fietsen">
                Fietsen
            </label>
<br>
            <input type="checkbox" name="Tennis" id="form-hobbies">
            <label for="form-hobbies-tennis">
                Tennis
            </label>
<br>
            <input type="checkbox" name="Badminton" id="form-hobbies">
            <label for="form-hobbies-badminton">
                Badminton
            </label>
<br>
            <input type="checkbox" name="Fitness" id="form-hobbies">
            <label for="form-hobbies-fitness">
                Fitness
            </label>
<br>
            <input type="checkbox" name="Dansen" id="form-hobbies">
            <label for="form-hobbies-dansen">
                Dansen
            </label>
<br>
            <input type="checkbox" name="Zwemmen" id="form-hobbies">
            <label for="form-hobbies-zwemmen">
                Zwemmen
            </label>
<br>
            <input type="checkbox" name="Mindfulness" id="form-hobbies">
            <label for="form-hobbies-mindfulness">
              Mindfulness  
            </label>
<br>
            <input type="checkbox" name="Yoga" id="form-hobbies">
            <label for="form-hobbies-yoga">
                Yoga
            </label>
<br>
            <input type="checkbox" name="Tuinieren" id="form-hobbies">
            <label for="form-hobbies-tuinieren">
                Tuinieren
            </label>
<br>
            <input type="checkbox" name="Tekenen" id="form-hobbies">
            <label for="form-hobbies-tekenen">
                Tekenen
            </label>
<br>
            <input type="checkbox" name="Koken" id="form-hobbies">
            <label for="form-hobbies-koken">
                Koken
            </label>
<br>
            <input type="checkbox" name="Instrument bespelen" id="form-hobbies">
            <label for="form-hobbies-instrument">
                Instrument bespelen
            </label>
<br>
            <input type="checkbox" name="Gamen" id="form-hobbies">
            <label for="form-hobbies-gamen">
                Gamen
            </label>
<br>
            <input type="checkbox" name="DIY" id="form-hobbies">
            <label for="form-hobbies-diy">
                Doe het zelver
            </label>
<br>
            <input type="checkbox" name="Handwerk" id="form-hobbies">
            <label for="form-hobbies-handwerk">
                Handwerk
            </label>
<br>
            <input type="checkbox" name="Andere" id="form-hobbies">
            <label for="form-hobbies-andere">
                Andere
            </label>
<br>
        </div>
<br>        
        <button type="submit" onclick="window.location.href='index.php'">
            Add person 
         </button>
    </form>
    </body>
</html>