// JavaScript code to handle voice recognition
$(document).ready(function() {
  let recognition;
  if('webkitSpeechRecognition' in window){
      recognition = new webkitSpeechRecognition();
  }
  else if('SpeechRecognition' in window){
      recognition = new SpeechRecognition();
  }
  else{
    console.log('Speech recognition is not supported by this browser.');
    return;
  }
  recognition.continuous = true;
  recognition.interimResults = true;
  recognition.lang = 'en-US';
  recognition.onresult = function(event) {
      let result = event.results[event.results.length - 1][0].transcript;
      $('#result').text(result);
  }
  $('#voicerecognitionbtn').on('click', function() {
      recognition.start();
  });
});