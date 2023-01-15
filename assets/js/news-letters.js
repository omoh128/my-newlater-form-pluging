window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}

$(document).ready(function() {
    $("form").validate({
        rules: {
            my_name: {
                required: true,
                minlength: 5
            }
        },
        rules: {
            my_email: {
                required: true,
                minlength: 3
            }
        }
    });
});

$("form").submit(function(e) {
    e.preventDefault();
    if ($(this).valid()) {
        $(this).Subscribe();
    }
});