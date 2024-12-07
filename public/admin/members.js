
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



var checkList = document.getElementById('list1');
checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
  if (checkList.classList.contains('visible'))
    checkList.classList.remove('visible');
  else
    checkList.classList.add('visible');
}