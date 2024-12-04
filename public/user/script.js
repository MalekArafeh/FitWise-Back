/*Make calories result visible*/
document.getElementById("caloriesCalc").addEventListener("click", function (x) {
    console.log('tmm');
    x.preventDefault();
    // document.getElementById("calories").style.display = "block";
    document.getElementById("result") = 15;


    //  
    // 

    // 


    


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




document.getElementById("caloriesCalc").addEventListener("click", calorie_calculator);





function calorie_calculator()
{
    console.log("Function executed"); // تأكيد التنفيذ

    const weight=document.getElementById('cal_weight').value;
    const height=document.getElementById('cal_height').value;
    const age=document.getElementById('cal_age').value;
    const gender=document.getElementById('gender').value;
    const goal=document.getElementById('goal').value;
    const activity = parseFloat(document.getElementById('activity').value);
    if (!weight || !height || !age || !gender || !activity) {
        alert("Please fill in all the fields!");
        return;
    }
     let BMR;
            if (gender === "male") {
                BMR = 10 * weight + 6.25 * height - 5 * age + 5;
            } else {
                BMR = 10 * weight + 6.25 * height - 5 * age - 161;
            }

            // حساب السعرات
            const calories = BMR * activity;
            document.getElementById("result").innerText = Math.round(calories);




}
