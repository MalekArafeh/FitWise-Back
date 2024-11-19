
document.getElementById('popupmembers').addEventListener('click', function (x) {
    x.preventDefault();
    
document.querySelector(".popupmm").style.visibility ="visible"
})
document.getElementById('close').addEventListener('submit', function (x) {
x.preventDefault();

document.querySelector(".popupmm").style.visibility ="hidden"})

/////////////////edit button
function edit(id){
document.getElementById(id).addEventListener('click', function (x) {
x.preventDefault();

document.querySelector(".popupmmEdit").style.visibility ="visible"
})
document.getElementById('close').addEventListener('submit', function (x) {
x.preventDefault();

document.querySelector(".popupmmEdit").style.visibility ="hidden"})}