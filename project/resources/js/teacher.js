





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
    const toggleBtn = document.querySelector('#toggle-btn');
    const body = document.querySelector('body');
    const sience = document.querySelector('.sience');
    const filter = document.querySelector('.filter');
    const search1 = document.querySelector('.search1');
    const search2 = document.querySelector('.search2');
    const search3 = document.querySelector('.search3');
    
    // Check if the toggle state is stored in localStorage
    if (localStorage.getItem('toggleState') === 'on') {
    if (navbar) navbar.classList.add('bg-orange');
    if (body) body.classList.add('bg-black');
    if (navigate) navigate.classList.add('text-white');
    if (title) title.classList.add('text-white');
    if (sience) sience.classList.add('text-white');
    if (filter) filter.classList.add('text-white');
    if (search1) search1.classList.add('bg-white');
    if (search2) search2.classList.add('bg-white');
    if (search3) search3.classList.add('bg-white');
    }
    
    if (toggleBtn) {
      toggleBtn.addEventListener('click', () => {
        if (navbar) navbar.classList.toggle('bg-orange');
        if (body) body.classList.toggle('bg-black');
        if (navigate) navigate.classList.toggle('text-white');
        if (title) title.classList.toggle('text-white');
        if (sience) sience.classList.toggle('text-white');
        if (filter) filter.classList.toggle('text-white');
        if (search1) search1.classList.toggle('bg-white');
        if (search2) search2.classList.toggle('bg-white');
        if (search3) search3.classList.toggle('bg-white');
    
        // Store the toggle state in localStorage
        if (navbar && navbar.classList.contains('bg-orange')) {
          localStorage.setItem('toggleState', 'on');
        } else {
          localStorage.setItem('toggleState', 'off');
        }
      });
    }