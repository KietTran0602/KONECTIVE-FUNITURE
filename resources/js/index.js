// let bts = document.getElementsByClassName("btn1");
// for(let i = 0; i<bts.length; i++){
//     bts[i].addEventListener('click',function(){
//         for(let j = 0; j<bts.length; j++){
//             j==i ? bts[j].classList.remove("active1") : bts[j].classList.add("active1");
//         }
//     })
// }

//slider click
import './bootstrap'
$(document).ready(()=>{
    var map = L.map('map').setView([10.806700123469406, 106.71422379326849], 50);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
    L.marker([10.806700123469406, 106.71422379326849]).addTo(map).bindPopup('Aptech Computer Education D5').openPopup();
    function onMapClick(e) {
        L.marker([10.806700123469406, 106.71422379326849]).addTo(map).bindPopup('Aptech Computer Education D5').openPopup();
    }
    map.on('click', onMapClick);
});
import { icon, Marker } from 'leaflet';
const iconUrl = 'https://cdn4.iconfinder.com/data/icons/small-n-flat/24/map-marker-512.png';
const iconDefault = icon({
  iconUrl,
  iconSize: [41, 41],
  iconAnchor: [12, 41],
  popupAnchor: [9, -34],
  tooltipAnchor: [16, -28],
});
Marker.prototype.options.icon = iconDefault;
var indexValue = 1;
showImg(indexValue);
function btm_slide(e){showImg(indexValue = e);}
function side_slide(e){showImg(indexValue += e);}
function showImg(e){
    let i;
    let img = document.querySelectorAll('.images img');
    let slider = document.querySelectorAll('.btm-slides span');

    if(e > img.length){indexValue = 1}
    if(e < 1){indexValue = img.length}

    for(i = 0; i < img.length; i++){
        img[i].style.display = "none";
    }
    for(i = 0; i < slider.length; i++){
        slider[i].style.background = "rgba(255,255,255,0.1)";
    }
    img[indexValue-1].style.display = "block";
    slider[indexValue-1].style.background = "white"; 
}
//slider auto
showImg2();
function showImg2(){
    let i;
    let img = document.querySelectorAll('.images img');
    let slider = document.querySelectorAll('.btm-slides span');

    if(indexValue > img.length){indexValue = 1}
    if(indexValue < 1){indexValue = img.length}

    for(i = 0; i < img.length; i++){
        img[i].style.display = "none";
    }
    indexValue++;
    if(indexValue > img.length) {indexValue = 1};

    for(i = 0; i < slider.length; i++){
        slider[i].style.background = "rgba(255,255,255,0.1)";
    }
    img[indexValue-1].style.display = "block";
    slider[indexValue-1].style.background = "white"; 

    setTimeout(showImg2, 3000); 
}


