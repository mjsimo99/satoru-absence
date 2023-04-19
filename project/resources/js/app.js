import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();







    // Get all the buttons that toggle the modal
    const toggleButtons = document.querySelectorAll('[data-modal-toggle="popup-modal"]');
    
    // Loop through each button
    toggleButtons.forEach(function(button) {
        // Add a click event listener to the button
        button.addEventListener('click', function() {
            // Get the corresponding input elements in the row
            const studentIdInput = this.parentNode.querySelector('input[name="student_id"]');
            const seanceIdInput = this.parentNode.querySelector('input[name="seance_id"]');
            
            // Set the value of the modal input elements to the values of the row input elements
            document.getElementById('student_id_modal').value = studentIdInput.value;
            document.getElementById('seance_id_modal').value = seanceIdInput.value;
        });
    });
