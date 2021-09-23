const pictureDisplay = document.getElementById("slider_img");
let pictureNumber = 0;
let animation = null;
let AnimFinished = true;

let autoScroll = setInterval(autoScroller, 1000);
let second = 0;

function autoScroller(){
    if (second >= 5){
        if(AnimFinished){
            if(pictureNumber > 4){
                pictureNumber = 0;
            }else{
                pictureNumber++;
            }
            AnimFinished = false;
            second = 0;
            changePicture();
        }
    }else{
        second++;
    }
}

function changePicture(){
    let opacity = 0.9;
    let firstAnimCompleted = false;
    animation = setInterval(frame, 5);

    function frame(){
        if (firstAnimCompleted == false){
            if (opacity <= 0) {
                firstAnimCompleted = true;
                
                switch(pictureNumber){
                    case 0: 
                        pictureDisplay.style.background = 'url("src/slider/contacto_slider.svg") no-repeat center center';
                        pictureDisplay.style.backgroundSize = '80% auto'; 
                        pictureDisplay.innerHTML = "CONTACTO MÉDICO";
                    break;
                    case 1: 
                        pictureDisplay.style.background = 'url("src/slider/datos_clinicos_slider.jpg") no-repeat center center';
                        pictureDisplay.style.backgroundSize = '80% auto'; 
                        pictureDisplay.innerHTML = "DATOS CLÍNICOS";
                    break;
                    case 2: 
                        pictureDisplay.style.background = 'url("src/slider/estadisticas_slider.svg") no-repeat center center';
                        pictureDisplay.style.backgroundSize = '80% auto';
                        pictureDisplay.innerHTML = "COVID-19 ESTADÍSTICAS";
                    break;
                    case 3: 
                        pictureDisplay.style.background = 'url("src/slider/estilo_vida_slider.jpg") no-repeat center center';
                        pictureDisplay.style.backgroundSize = '80% auto';
                        pictureDisplay.innerHTML = "ESTILO DE VIDA";
                    break;
                    case 4: 
                        pictureDisplay.style.background = 'url("src/slider/protocolos_slider.jpg") no-repeat center center';
                        pictureDisplay.style.backgroundSize = '80% auto';
                        pictureDisplay.innerHTML = "PROTOCOLOS ACTUALES"
                    break;
                    case 5: 
                        pictureDisplay.style.background = 'url("src/slider/tipos_enfermedades_slider.jpg") no-repeat center center';
                        pictureDisplay.style.backgroundSize = '80% auto';
                        pictureDisplay.innerHTML = "TIPOS DE ENFERMEDADES"
                    break;
                }

            } else {
                opacity -= 0.01;
                pictureDisplay.style.opacity = opacity;
            }
        }else{
            if (opacity >= 1) {
                firstAnimCompleted = true;
                AnimFinished = true;
                clearInterval(animation);
            } else {
                opacity += 0.01;
                pictureDisplay.style.opacity = opacity;
            }
        }
    }
}

function nextPicture(){
    if(AnimFinished){
        if(pictureNumber > 4){
            pictureNumber = 0;
        }else{
            pictureNumber++;
        }
        AnimFinished = false;
        second = -5;
        changePicture();
    }
}

function previousPicture(){
    if(AnimFinished){
        if(pictureNumber < 1){
            pictureNumber = 5;
        }else{
            pictureNumber--;
        }
        AnimFinished = false;
        second = -5;
        changePicture();
    }
}