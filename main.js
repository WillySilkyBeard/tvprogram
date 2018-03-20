// Удаление элемента с известным родителем
var title = document.querySelectorAll(".title");
var fav = document.querySelectorAll(".favorite");
var channel = document.querySelectorAll(".channel");
var tr = document.getElementsByTagName('tr');

for (i = 0; i < title.length; i++) {
	var a = title[i].childNodes[0];
	//title[i].removeChild(fav[i]);
	a.removeAttribute('href');
};

var td = document.querySelectorAll(".title-cell");
for (var i = 0; i < tr.length; i++) {
	tr[i].classList.remove("future");
	tr[i].classList.remove("past");
	tr[i].classList.remove("type_4");
	tr[i].classList.remove("type_1");
	tr[i].classList.remove("type_2");
	tr[i].classList.remove("type_3");
	tr[i].classList.remove("type_5");
	tr[i].classList.remove("type_20");
	tr[i].classList.remove("type_10");
}


for (var i = 0; i < td.length; i++) {
	var a = td[i].childNodes[0];
	a.removeAttribute('href');
};

var time = document.querySelectorAll(".time-cell");
var cd = document.querySelector(".centr_day");
var d = new Date();
var currentTime = ((d.getHours() < 10) ? '0'+d.getHours() : d.getHours())+':'+d.getMinutes();
//var currentDay = d.getDate()+'.'+((d.getMonth() < 10) ? '0'+(d.getMonth() + 1) : d.getMonth())+'.'+d.getFullYear();
var currentDay = d.getFullYear()+'-'+((d.getMonth() < 10) ? '0'+(d.getMonth() + 1) : d.getMonth())+'-'+d.getDate();

console.log(cd.innerHTML);
console.log(currentTime);

if ("06:35" > currentTime) {
	console.log("06:35 >")
}


//проверка надоли отмечать прошедшие программы
if (currentDay == cd.innerHTML) {

// проверка на прошедшее время
for (var j = 0; j < channel.length; j++) {

	for (var i = 0; i < channel[j].children[1].children[0].children.length; i++) {
		
		//console.log(channel[j].children[1].children[0].children[i].children[0].innerHTML);

		if(channel[j].children[1].children[0].children[i].children[0].innerHTML < currentTime){
			channel[j].children[1].children[0].children[i].classList.add("past");

			if(i>0){
				previous = channel[j].children[1].children[0].children[i-1].children[0];

				//console.log("prev - "+previous.innerHTML);
				//console.log("time - "+channel[j].children[1].children[0].children[i].children[0].innerHTML);

				if(previous.innerHTML > channel[j].children[1].children[0].children[i].children[0].innerHTML) {
					channel[j].children[1].children[0].children[i].classList.remove("past");
					break;
						/*console.log(previous.innerHTML);
						console.log(time[i].innerHTML);*/
					}
				}
			}
			if (channel[j].children[1].children[0].children[i].children[0].innerHTML > currentTime && channel[j].children[1].children[0].children[i].classList.contains("past") == false) {
			    channel[j].children[1].children[0].children[i-1].classList.remove("past");
				channel[j].children[1].children[0].children[i-1].classList.add("online");
				break;
			}
		}
	}
}