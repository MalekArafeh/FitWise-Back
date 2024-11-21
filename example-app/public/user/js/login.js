

setInterval(function(){

    let rnd = Math.floor(Math.random() * images.length);
    image.src=images[rnd];
},1500);