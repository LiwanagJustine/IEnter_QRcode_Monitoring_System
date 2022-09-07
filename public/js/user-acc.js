$(document).ready(function(){
    $("#btn-home").on('mouseover',function(){
        $(this).css({
            background: "#ccd4dc",
            transition: "0.6s"
        })
        $("#a-home").css({
            color: "#323746",
            transition: "0.6s"
        })
    });
    $("#btn-map").on('mouseover',function(){
        $(this).css({
            background: "#ccd4dc",
            transition: "0.6s"
        })
        $("#a-map").css({
            color: "#323746",
            transition: "0.6s"
        })
    });
    $("#btn-cal").on('mouseover',function(){
        $(this).css({
            background: "#ccd4dc",
            transition: "0.6s"
        })
        $("#a-cal").css({
            color: "#323746",
            transition: "0.6s"
        })
    });
    $("#btn-hist").on('mouseover',function(){
        $(this).css({
            background: "#ccd4dc",
            transition: "0.6s"
        })
        $("#a-hist").css({
            color: "#323746",
            transition: "0.6s"
        })
    });
    $("#btn-info").on('mouseover',function(){
        $(this).css({
            background: "#ccd4dc",
            transition: "0.6s"
        })
        $("#a-info").css({
            color: "#323746",
            transition: "0.6s"
        })
    });

    $(".menu button").mouseleave(function(){
        $(this).css({
            background: "white",
        })
        $(".menu a").css({
            color: "#323746a9",
        })
    });
});

// --------------clock-----------------
function updateClock(){
var now = new Date();
var dname = now.getDay(),
    mo = now.getMonth(),
    dnum = now.getDate(),
    yr = now.getFullYear(),
    hou = now.getHours(),
    min = now.getMinutes(),
    sec = now.getSeconds(),
    pe = "AM";

    if(hou >= 12){
        pe = "PM";
    }
    if(hou == 0){
        hou = 12;
    }
    if(hou > 12){
        hou = hou - 12;
    }

    Number.prototype.pad = function(digits){
        for(var n = this.toString(); n.length < digits; n = 0 + n);
        return n;
    }

    var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
    var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
    var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
    for(var i = 0; i < ids.length; i++)
    document.getElementById(ids[i]).firstChild.nodeValue = values[i];
}

function initClock(){
updateClock();
window.setInterval("updateClock()", 1);
}
