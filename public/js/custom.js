$(document).ready(function() {
    $('.delete-button').click(function() {
        if(confirm("Are You Sure ?")) {
            return true;
        }
        else {
            return false;
        }
    });
});