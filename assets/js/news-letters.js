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
            my_input: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            my_input: {
                required: "Please enter your input",
                minlength: "Your input should be at least 5 characters"
            }
        }
    });
});

$("form").submit(function(e) {
    e.preventDefault();
    if ($(this).valid()) {
        $(this).submit();
    }
});