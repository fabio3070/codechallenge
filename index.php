<!DOCTYPE html>
<html>
    <head>
        <!-- Scripts -->
        <script src="scripts.js" type="text/javascript"></script>
        <!-- Links -->
        <link rel="stylesheet" href="styles.css">
        <!-- Includes -->
        <?php include 'functions.php';?>
    </head>    
    <body>
        <div id="main-container" class="container">
            <form method="POST">
                <div>
                    <textarea id="recorded-text" name="recorded-text" class="recordedText" required="true"></textarea>
                </div>
                <div class="emailContainer" >
                    <label>Email:</label>
                    <input type="mail" name="email-input" id="email-input" required="true"/>
                </div>
                <div class="buttonAudio">
                    <div class="recordButtonContainer" >
                        <button id="record_button" type="button" onclick="GetText();">Record</button>
                    </div>           
                    <div class="recordButtonContainer">
                        <button id="play_button" type="button" onclick="TextToSpeech();">Play</button>
                    </div>
                </div>
                <div class="clean"></div>
                <div class="sendButton">
                    <button id="send_button" name="send_button" type="submit" >Send</button>
                </div>
            </form>
        </div>
    </body>
</html>