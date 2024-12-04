

/*Make calories result visible*/
// document.getElementById("caloriesCalc").addEventListener("click", function (x) {
//     x.preventDefault();
//     console.log ('clicked')
    
// });





/*Make protein result visible*/
document.getElementById("proteinCalc").addEventListener("click", function (x) {
    x.preventDefault();
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


// document.getElementById("caloriesCalc").addEventListener("click", calorie_calculator);


function calorie_calculator()
{        document.getElementById("calories").style.display = "block";


    console.log("Function executed"); // تأكيد التنفيذ

    const weight=document.getElementById('cal_weight').value;
    const height=document.getElementById('cal_height').value;
    const age=document.getElementById('cal_age').value;
    const gender=document.getElementById('cal_gender').value;
    const goal=document.getElementById('cal_goal').value;
    const activity = document.getElementById('cal_activity').value;
    if (!weight || !height || !age || !gender || !activity|| !goal) {
        alert("Please fill in all the fields!");
        return;
    }
    
     console.log(activity);


     let BMR;

     BMR = 10 * weight + 6.25 * height - 5 * age - 161;
     console.log(BMR);

            if (gender == 'male') {
                BMR = 10 * weight + 6.25 * height - 5 * age + 5;
            } else {
                BMR = 10 * weight + 6.25 * height - 5 * age - 161;
            }

            if(goal=='loss')
            {BMR=BMR-50;}
             if(goal=='gain')
            {BMR=BMR+50;}
            


           


            // حساب السعرات
            const calories = BMR*activity;
            document.getElementById("result").innerText = calories;



}



function protein_calculator()
{
    document.getElementById("protein").style.display = "block";


    const weight=document.getElementById('pro_weight').value;
    const goal = parseFloat(document.getElementById('pro_goal').value); // Convert goal to a float
    const activity = parseFloat(document.getElementById('pro_activity').value); // Convert activity to a float

console.log(weight);
console.log(goal);
console.log(activity);

    if (!weight || !goal || !activity) {
        alert("Please fill in all the fields!");
        return;
    }


    let protine;
    protine=weight*(activity+goal);
    console.log(protine);
    document.getElementById('protine').innerText=protine;


}






