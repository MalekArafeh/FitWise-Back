let popup=document.getElementById("popup");


  function openPopup(){
    popup.classList.add("openPopup");
    document.body.classList.add("no-scroll"); // Disable scroll

  }
  function closePopup(){
    popup.classList.remove("openPopup");
    document.body.classList.remove("no-scroll"); // Disable scroll

  }