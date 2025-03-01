<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <!-- hier komt een dropdown -->
                <select name="type" id="type">
                    <option value="">-- kies een type --</option>
                    <option value="achtbaan">Achtbaan</option>
                    <option value="draaiend">Draaiende attractie</option>
                    <option value="kinder">Kinder attractie</option>
                    <option value="horeca">Hotel, restaurant, café</option>
                    <option value="show">Show, theater, bioscoop</option>
                    <option value="water">Water attracties</option>
                    <option value="overig">Overig</option>
                </select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="form-group">
                <label for="prioriteit">Nieuwsbrief:</label>
                <input type="checkbox" name="prioriteit" id="prioriteit">
                <label for="prioriteit">Ik wil graag de nieuwsbrief ontvangen</label>
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>
            <div class="form-group">
                <label for="overig">Overige info:</label>
                <textarea name="overig" id="overig" class="form-input" rows="4"></textarea>
            </div>
            
            <input type="submit" value="Verstuur melding">

        </form>
    </div>  

</body>

</html>
