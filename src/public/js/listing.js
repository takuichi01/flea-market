document.querySelectorAll('.category-tag input[type="checkbox"]').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        if (checkbox.checked) {
            checkbox.parentElement.classList.add('selected');
        } else {
            checkbox.parentElement.classList.remove('selected');
        }
    });
});