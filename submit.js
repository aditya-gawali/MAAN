function SubmitFormData() {
    var name = $("#shnum").val();

    // var gender = $("input[type=radio]:checked").val();
    $.post("submit.php", { shnum: name },
        function (data) {
            $('#results').html(data);
            // $('#myForm')[0].reset();
        });
}