document.querySelector('.login-form').addEventListener('submit', function(event) {
    event.preventDefault();

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username === '') {
        alert('Username is required');
        return;
    }

    if (password === '') {
        alert('Password is required');
        return;
    }

    // If validation passes, you can submit the form here
    console.log('Form submitted');
});
