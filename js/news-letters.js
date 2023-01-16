alert('alet to js');



const form = document.getElementById('my-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    if (name.value === '' || email.value === '') {
        alert('Please fill out all fields');
    } else {
        form.submit();
    }
});