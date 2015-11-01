function america(){
    document.getElementById("american-galery").style.display="block";
    document.getElementById("canada-galery").style.display="none";
    document.getElementById("frence-galery").style.display="none";

}
function canada() {
    document.getElementById("american-galery").style.display="none";
    document.getElementById("canada-galery").style.display="block";
    document.getElementById("frence-galery").style.display="none";
}
function comingSoon() {
    document.getElementById("american-galery").style.display="none";
    document.getElementById("canada-galery").style.display="none";
    document.getElementById("frence-galery").style.display="block";
}

$(document).ready(function(){
    $(".col-md-3").mouseover(function(){
        $(this).find(".pn-background").addClass("pn-background-hover1");
        $(this).find(".pn-background~div").addClass("pn-background-hover2");
    });
});



$(document).ready(function(){
    $(".col-md-3").mouseout(function(){
        $(this).find(".pn-background").removeClass("pn-background-hover1");
        $(this).find(".pn-background~div").removeClass("pn-background-hover2");
    });
});

function sky(){
    document.getElementById("sky-container").style.display="block";
    document.getElementById("water-container").style.display="none";
}
function water(){
    document.getElementById("sky-container").style.display="none";
    document.getElementById("water-container").style.display="block";
}