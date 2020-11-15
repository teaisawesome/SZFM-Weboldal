var asd = 5;
$(document).ready(() => {
    function setClickListener(id)
    {
        
        $(`#${id}`).click(() => {
            alert(id);
        });
    }
    
    function loadClickListeners()
    {
        var spans = $(".rate");
        
        for(span of spans)
        {
            setClickListener(span.id);
        }
    }

    $.post("../ajax/forum_ajax.php", {"num" : 5}, (data) => {
        $("#content").html(data);
        loadClickListeners();
    });
});
