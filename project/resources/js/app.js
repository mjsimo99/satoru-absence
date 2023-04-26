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





    const navbar = document.querySelector('.majid');
    const title = document.querySelector('h3');
    const navigate = document.querySelector('a');
    const change = document.querySelector('.change');
    const toggleBtn = document.querySelector('#toggle-btn');
    const body = document.querySelector('body');
    
    // Check if the toggle state is stored in localStorage
    if (localStorage.getItem('toggleState') === 'on') {
      if (navbar !== null) {
        navbar.classList.add('bg-orange');
      }
      if (body !== null) {
        body.classList.add('bg-black');
      }
      if (navigate !== null) {
        navigate.classList.add('text-white');
      }
      if (change !== null) {
        change.classList.add('text-white');
      }
      if (title !== null) {
        title.classList.add('text-white');
      }
    }
    
    toggleBtn.addEventListener('click', () => {
      if (navbar !== null) {
        navbar.classList.toggle('bg-orange');
      }
      if (body !== null) {
        body.classList.toggle('bg-black');
      }
      if (navigate !== null) {
        navigate.classList.toggle('text-white');
      }
      if (change !== null) {
        change.classList.toggle('text-white');
      }
      if (title !== null) {
        title.classList.toggle('text-white');
      }
    
      // Store the toggle state in localStorage
      if (navbar !== null && navbar.classList.contains('bg-orange')) {
        localStorage.setItem('toggleState', 'on');
      } else {
        localStorage.setItem('toggleState', 'off');
      }
    });