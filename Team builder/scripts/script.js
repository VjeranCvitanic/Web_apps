var current_dragged_object;
function drag_start(event) {
    current_dragged_object = event.target;
    var style = window.getComputedStyle(event.target, null);
    event.dataTransfer.setData("text/plain",
    (parseInt(style.getPropertyValue("left"),10) - event.clientX) + ',' + (parseInt(style.getPropertyValue("top"),10) - event.clientY));
} 
function drag_over(event) { 
    event.preventDefault(); 
    return false; 
} 
function drop(event) { 
    var offset = event.dataTransfer.getData("text/plain").split(',');
    var dm = current_dragged_object;
    if(dm)
    {
        console.log(dm)
        dm.style.left = (event.clientX + parseInt(offset[0],10)) + 'px';
        dm.style.top = (event.clientY + parseInt(offset[1],10)) + 'px';
    }
    
    event.preventDefault();
    return false;
} 

function SaveTeam(event)
{
    var bajsa = document.getElementById('bajsa');
    var leo = document.getElementById('leo');
    var avo = document.getElementById('avo');
    var josip = document.getElementById('josip');
    var ciko = document.getElementById('ciko');
    var biuk = document.getElementById('biuk');
    var tonci = document.getElementById('tonci');
    var oreb = document.getElementById('oreb');
    var maras = document.getElementById('maras');
    var ujo = document.getElementById('ujo');
    var korda = document.getElementById('korda');

    const saved_positions_left = [korda.style.left, leo.style.left, bajsa.style.left, ciko.style.left, josip.style.left, avo.style.left, maras.style.left, biuk.style.left, ujo.style.left, tonci.style.left, oreb.style.left]
    const saved_positions_top = [korda.style.top, leo.style.top, bajsa.style.top, ciko.style.top, josip.style.top, avo.style.top, maras.style.top, biuk.style.top, ujo.style.top, tonci.style.top, oreb.style.top]
}
window.onload = function () {
    var dm = document.getElementsByClassName('dragme'); 
    for (let index = 0; index < dm.length; index++) {
        dm[index].addEventListener('dragstart',drag_start,false); 
    }
    var saveTeamButton = document.getElementById('SaveTeamButton');
    saveTeamButton.addEventListener('mousedown', SaveTeam);
    document.body.addEventListener('dragover',drag_over,false); 
    document.body.addEventListener('drop',drop,false); 
};

