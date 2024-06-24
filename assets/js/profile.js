document.addEventListener('DOMContentLoaded', function() {
    var profileIcon = document.getElementById('profile-icon');
    var dropdownMenu = document.getElementById('dropdown-menu');
    var editProfileLink = document.getElementById('edit-profile');
    var editProfileSection = document.getElementById('edit-profile-section');
    var uploadInput = document.getElementById('upload-input');
    var profilePicture = document.getElementById('profile-picture');
 
    profileIcon.addEventListener('click', function() {
        if (dropdownMenu.style.display === 'block') {
            dropdownMenu.style.display = 'none';
            editProfileSection.style.display = 'none';
        } else {
            dropdownMenu.style.display = 'block';
        }
    });
 
    editProfileLink.addEventListener('click', function(event) {
        event.preventDefault();
        editProfileSection.style.display = 'block';
    });
 
    uploadInput.addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                profilePicture.src = e.target.result;
                profileIcon.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });
 
    window.addEventListener('click', function(event) {
        if (event.target !== profileIcon && !dropdownMenu.contains(event.target)) {
            dropdownMenu.style.display = 'none';
            editProfileSection.style.display = 'none';
        }
    });
});