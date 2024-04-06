$(document).ready(function() {
  $('#voicerecognitionbtn').on('click', function() {
    let recognition = new webkitSpeechRecognition();
    recognition.continuous = false;
    recognition.interimResults = false;
    recognition.lang = 'en-US';

    recognition.onresult = function(event) {
        let result = event.results[0][0].transcript;
        $('#result').text(result);

        // Send the recognized text to the PHP backend
        $.post('server/getvoicerecognition.php', { text: result }, function(response) {
            console.log(response);
            // Handle the response from the PHP backend
        });
    }
    recognition.start();
  });
});