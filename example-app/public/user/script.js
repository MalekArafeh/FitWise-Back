/*Make calories result visible*/
document.getElementById("caloriesCalc").addEventListener("click", function (x) {
    x.preventDefault();
    document.getElementById("calories").style.display = "block";
});

/*Make protein result visible*/
document.getElementById("proteinCalc").addEventListener("click", function (x) {
    x.preventDefault();
    document.getElementById("protein").style.display = "block";
});

if (window.matchMedia("(max-width: 820px)").matches) {
    document.getElementById("defaultTab").click();
} else {
    document.getElementById("defaultOption").click();
}
function showCalc(evt, calcId) {
    var i, calc, option;
    calc = document.getElementsByClassName("calc");
    for (i = 0; i < calc.length; i++) {
        calc[i].style.display = "none";
        document.getElementById("calories").style.display = "none";
        document.getElementById("protein").style.display = "none";
    }
    option = document.getElementsByClassName("option");
    for (i = 0; i < option.length; i++) {
        option[i].className = option[i].className.replace(" active", "");
        icon = option[i].querySelector(".icon");
        if (icon) icon.innerHTML = "";
    }
    document.getElementById(calcId).style.display = "block";
    if (window.matchMedia("(max-width: 820px)").matches) {
        evt.currentTarget.className += " active";
    } else {
        evt.currentTarget.querySelector(".icon").innerHTML =
            '<i class="fa-solid fa-arrow-right blk-text"></i>';
    }
}
