$(document).ready(function()
{
    $(document).on("click", ".find-factorial", function()
    {
        var input = $("#input").val();
        $.ajax({
            type: "POST",
            url: "find_factorial.php",
            data:
            {
                input: input
            },
            success: function(data)
            {
                let output = JSON.parse(data);
                $(".output").html(output.factorial);
            }
        })
    });
});