
    var images = new Array();
    var i = 0;
     
    images[0] = './img/Magic.png';
    images[1] = './img/Wizzard.png';
   
    function viewImages21() {
        document.getElementById("img_main21").src = images[i]; 
        i++;
        if (i == images.length) {
            i = 0;
        }
        setTimeout("viewImages21()",2000);
    }   

 viewImages21();