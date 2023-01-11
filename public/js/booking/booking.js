var getdots = document.getElementsByClassName("dot");
var getpages = document.querySelectorAll(".page");
var getprevbtn = document.getElementById("prevbtn");
var getnextbtn = document.getElementById("nextbtn");

for (var i = 0; i < getpages.length; i++) {
    getpages[i].style.display = "none";
}

var curridx = 0;

showpage(curridx);

function showpage(num) {
    
    getpages[num].style.display = "block";

    if (num === (getpages.length - 2)) {
        getnextbtn.innerHTML = "Confirm";
    } else if (num === (getpages.length - 1)) {
        getnextbtn.innerHTML = "OK";
    } else if (num === 0) {
        getprevbtn.style.display = "none";
        getnextbtn.style.display = "none";
    } else {
        getnextbtn.style.display = "inline-block";
        getprevbtn.style.display = "inline-block";
        getnextbtn.innerHTML = "Next";
    }
    dotindicator(num);
}

function dotindicator(num) {

    for (var x = 0; x < getdots.length; x++) {
        getdots[x].classList.remove("active");
    }
    getdots[num].className += " active";
}

function gonow(num) {

    getpages[curridx].style.display = "none";

    curridx = curridx + num;
    showpage(curridx);
}
