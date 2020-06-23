var delay = 700 //czas opóżnienia
var curindex = 0

var randomimages = new Array()

randomimages[0] = "images/jeden.jpg"
randomimages[1] = "images/dwa.jpg"
randomimages[2] = "images/trzy.jpg"
randomimages[3] = "images/cztery.jpg"

var preload = new Array()

for (n = 0; n < randomimages.length; n++) {
    preload[n] = new Image()
    preload[n].src = randomimages[n]
}

document.write(
    '<center><a><img name="defaultimage"' +
    randomimages[Math.floor(Math.random() * (randomimages.length))] +
    '" width=300 height=140vh border=3px  ></a></center>')

function rotateimage() {

    if (curindex == (tempindex = Math.floor(Math.random() * (randomimages.length)))) {
        curindex = curindex == 0 ? 1 : curindex - 1
    } else
        curindex = tempindex

    document.images.defaultimage.src = randomimages[curindex]
}

setInterval("rotateimage()", delay)