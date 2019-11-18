var letter = document.getElementsByClassName('title-letter');


function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

function colorChange(){
	this.style.color = getRandomColor();
}

for (var i = 0 ; i < letter.length; i++) {
   letter[i].addEventListener('mouseover',colorChange,false ) ; 
}

