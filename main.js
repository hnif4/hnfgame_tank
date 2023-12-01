// Deklarasi
const img = document.getElementById('img');
let posx = parseInt(getComputedStyle(img).right, 10);
const tendang = document.getElementById('tendang');
const movingImage = document.getElementById('movingImage');
const playerScore = document.getElementById("score")



function tembak() {
  tendang.style.top = '-550px'
    setTimeout(() => {
      tendang.style.top = '0px' 
      document.getElementById('sound').onplay(); //memainkan suara tembak peluru
    }, 900);
}

function loncat() {
    img.style.top = '-450px'
    setTimeout(() => {
        img.style.top = '0px' 
      }, 900) 

      tendang.style.top = '-450px'
    setTimeout(() => {
      tendang.style.top = '0px' 
      }, 900) 
}

function kekanan() {
    img.style.right= (posx - 60) + "px";
    posx = parseInt(getComputedStyle(img).right, 10);

    tendang.style.right= (posx - 1) + "px";
    posx = parseInt(getComputedStyle(tendang).right, 10);
}
function kekiri() {
    tendang.style.right= (posx + 60) + "px";
    posx = parseInt(getComputedStyle(tendang).right, 10);

    img.style.right= (posx + 1) + "px";
    posx = parseInt(getComputedStyle(img).right, 10);
}
// Event
document.addEventListener("keydown", function (event) {
  event.preventDefault();
  const key = event.key;

  switch (key) {
      case " ":
          loncat();
          break;
      case "ArrowLeft":
          kekiri();
          break;
      case "ArrowRight":
          kekanan();
          break;
      case "z":
          tembak();
          break;
      case "d":
          kekanan();
          break;
      case "a":
          kekiri();
          break;
  }
});


  
 
  