<!-- Simple form to collect student information -->
<form id="studentform">
    <input type="text" placeholder="Enter your firstname" name="fname" required>
    <input type="text" placeholder="Enter your lastname" name="lname" required>
    <input type="submit" value="Submit">
</form>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {

    $("#studentform").on("submit", function(e) {
        e.preventDefault();

        var form = $("#studentform")[0];
        var formdata = new FormData(form);

        $.ajax({
            url: "formdata.php",
            type: "POST",
            data: formdata,
            contentType: false,
            processData: false,
            beforeSend: function() {
                alert("Please wait a sec...");
            },
            success: function(response) {
                alert(response);
                setTimeout(() => {
                    location.reload();
                }, 3000);
            }
        });
    });

});
</script>