var asd = 5;
$(document).ready(() => {
    function setClickListener(id)
    {
        var mapper = {"onestar" : 1, "twostar" : 2,
                    "threestar" : 3, "fourstar" : 4, 
                    "fivestar" : 5
        };
        
        $(`#${id}`).click(() => {
            $.post("../ajax/forumrating_ajax.php", {"num" : 2 ,"comment_id" : id.split("-")[1], "rating" : mapper[id.split("-")[0]]}, (data) => {
                // console.log(data);
            });
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
