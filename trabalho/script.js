document.getElementById('openInputButton').addEventListener('click', function(event) {
    event.preventDefault(); // Previene el comportamiento predeterminado del botón
    var inputContainer = document.getElementById('inputContainer');
    if (inputContainer.classList.contains('hidden')) {
        inputContainer.classList.remove('hidden');
    } else {
        inputContainer.classList.add('hidden');
    }
});

