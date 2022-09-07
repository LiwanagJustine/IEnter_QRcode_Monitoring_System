$(document).ready(function(){
    $("#btnUser1").on('mouseover',function(){
        $(this).css({
            border: "2px solid #1686FB",
        })
        $(".span1").css({
            color: "#2c2f37"
        })
        $(".icon1").css({
            opacity: "100%"
        })
    });
    $("#btnUser2").on('mouseover',function(){
        $(this).css({
            border: "2px solid #1686FB",
        })
        $(".span2").css({
            color: "#2c2f37"
        })
        $(".icon2").css({
            opacity: "100%"
        })
    });
    $("#btnUser3").on('mouseover',function(){
        $(this).css({
            border: "2px solid #1686FB",
        })
        $(".span3").css({
            color: "#2c2f37"
        })
        $(".icon3").css({
            opacity: "100%"
        })
    });
    $(".btnBack").on('mouseover',function(){
        $(".back").css({
            background: "#1686FB",
            color:"white"
        })
    });
    $(".btnBack").mouseleave(function(){
        $(".back").css({
            background: "none",
            color: "#323746"
        })
    });

    $(".userType button").mouseleave(function(){
        $(this).css({
            borderColor: "transparent"
        })
        $(".span1").css({
            color: "#b8bfc9"
        })
        $(".icon1").css({
            opacity: "0.5"
        })
        $(".span2").css({
            color: "#b8bfc9"
        })
        $(".icon2").css({
            opacity: "0.5"
        })
        $(".span3").css({
            color: "#b8bfc9"
        })
        $(".icon3").css({
            opacity: "0.5"
        })
        $(".btn").css({
            border: "solid 2px #1686FB "
        })
    });

    // ------------multiple form-----------------

    // employee user type
    $("#btnUser1").click(function(){
        $(".cont1").css({"display": "none"});
        $(".cont2").css({"display": "none"});

        $(".cont3").css({"display": "block"});
        $(".cont4").css({"display": "block"});
        $(".cont5").css({"display": "block"});

        $(".slide1").css({"width": "16px", "background": "#d0d5de"});
        $(".slide2").css({"width": "45px", "background": "#1686FB"});

        $("#num").html("<p style=\"position:relative; top:2px;\">Employee number</p>");
        $("#ID").html("<p class:\"req\">Employee/Goverment ID:</p>");
    });

    // Student user type
    $("#btnUser2").click(function(){
        $(".cont1").css({"display": "none"});
        $(".cont2").css({"display": "none"});

        $(".cont3").css({"display": "block"});
        $(".cont4").css({"display": "block"});
        $(".cont5").css({"display": "block"});

        $(".slide1").css({"width": "16px", "background": "#d0d5de"});
        $(".slide2").css({"width": "45px", "background": "#1686FB"});

        $("#num").html("<p style=\"position:relative; top:2px;\">Student number</p>");
        $("#ID").html("<p class:\"req\">Student ID:</p>");
    });

    // Back into User type choices
    $("#btnBack").click(function(){
        $(".cont1").css({"display": "block"});
        $(".cont2").css({"display": "block"});

        $(".cont3").css({"display": "none"});
        $(".cont4").css({"display": "none"});
        $(".cont5").css({"display": "none"});

        $(".slide1").css({"width": "45px", "background":"#1686FB"});
        $(".slide2").css({"width": "16px", "background": "#d0d5de"});
    });

    $("#btnSubmit").click(function(){
        $(".cont1").css({"display": "none"});
        $(".cont2").css({"display": "none"});

        $(".cont3").css({"display": "none"});
        $(".cont4").css({"display": "none"});
        $(".cont5").css({"display": "none"});

        $(".registerDone").css({"display": "block"});
        $(".slide1").css({"display": "none"});
        $(".slide2").css({"display": "none"});
    });
});
