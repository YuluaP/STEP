/*
 *
 */


function addSlide() {

// ссылка на обьект
	var elUrl = document.getElementById("inUrl");
	var elText = document.getElementById("inText");

// считать значения
	var slideUrl = elUrl.value;
	var slideText = elText.value;

 	console.log ('Start create slide: ' + slideText);

// Создание элемента списка, куда я буду ставить слайд
 	var elLi = document.createElement('li'); 
 	elLi.style.backgroundImage = "url('" + slideUrl + "')"; // elLi.style.backgroundImage = "url('" + document.getElementById("inUrl").value + "')";

// Создание кнопки удаления
	var btnDel =  document.createElement('a');
	btnDel.innerHTML = 'X';
	btnDel.className ="btnDel";
	btnDel.onclick = function() {this.parentElement.remove();}
	elLi.appendChild (btnDel);

// Создание кнопки удаления
	var slideHeader =  document.createElement('h1');
	slideHeader.innerHTML = slideText;
	slideHeader.className ="slideHeader";
	elLi.appendChild (slideHeader);

// Включение слайда в список
	var elUl = document.getElementById("slideContent");
	elUl.appendChild (elLi); 
}



var slideNum = 0;


function doPrev() {
	var slideContent = document.getElementById("slideContent");
	var slides = slideContent.getElementsByTagName("li");

	if (slides.length == 0) {
		return;
	}

	console.log ('Count of slides: ' + slides.length + ' ' + slideNum);

//	slides[slideNum].className = "slideHidden";
	slides[slideNum].style.visibility = "hidden";

	slideNum--;
	if (slideNum < 0){
		slideNum = slides.length - 1;
	}
//	slides[slideNum].className = "slideActive";
	slides[slideNum].style.visibility = "visible";
}


function doNext() {
	var slideContent = document.getElementById("slideContent");
	var slides = slideContent.getElementsByTagName("li");
	if (slides.length == 0) {
		return;
	}

	console.log ('Count of slides: ' + slides.length + ' ' + slideNum);

	//slides[slideNum].className = "slideHidden";
	slides[slideNum].style.visibility = "hidden";

	slideNum++;
	if (slideNum + 1  > slides.length){
		slideNum = 0;
	}
	//slides[slideNum].className = "slideActive";
	slides[slideNum].style.visibility = "visible";

}

function doLoop() {
	doNext ();
	console.log (" next ");
}
var sec = document.getElementById("inSec");
var loopSec = sec.value;

var slideLoop = setInterval (function() {doLoop ();}, loopSec);

/*function doLoop() {
	doNext ();
	console.log (" next ");
}

var slideLoop = setInterval (function() {doLoop ();}, 1000);
*/
