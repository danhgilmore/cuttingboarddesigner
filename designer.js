
// This code will populate the Preview Xin x Yin measurements when the page loads
jQuery(document).ready(function() {
    resultLength.innerHTML = document.getElementById('inputLength').value + "in x ";
    resultWidth.innerHTML = document.getElementById('inputWidth').value + "in";
});

sourceLength = document.getElementById('inputLength');
sourceWidth = document.getElementById('inputWidth');

WidthInputHandler = function(e) {
    resultWidth.innerHTML = e.target.value +" in";
}

LengthInputHandler = function(e) {
    resultLength.innerHTML = e.target.value +" in x ";
}

sourceWidth.addEventListener('input', WidthInputHandler);
sourceWidth.addEventListener('propertychange', WidthInputHandler);

sourceLength.addEventListener('input', LengthInputHandler);
sourceLength.addEventListener('propertychange', LengthInputHandler);
