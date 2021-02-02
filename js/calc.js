function calculator() {
    var mm6 = document.getElementById('6mm').value == null ? 0 : document.getElementById('6mm').value;
    var mm8 = document.getElementById('8mm').value;
    var mm10 = document.getElementById('10mm').value;
    var mm12 = document.getElementById('12mm').value;
    var mm14 = document.getElementById('14mm').value;
    var mm16 = document.getElementById('16mm').value;
    var mm20 = document.getElementById('20mm').value;
    var mm24 = document.getElementById('24mm').value;
    var mm28 = document.getElementById('28mm').value;
    var mm30 = document.getElementById('30mm').value;
    var mm32 = document.getElementById('32mm').value;
    var w6 = 2.664, w8 = 4.74, w10 = 7.404, w12 = 10.656, w14 = 14.52, w16 = 18.96;
    var w20 = 29.64, w24 = 42.6, w28 = 58.08, w30 = 66.564, w32 = 75.72;
    var tw6 = mm6 * w6;
    var tw6 = mm6 * w6
    var tw8 = mm8 * w8;
    var tw10 = mm10 * w10;
    var tw12 = mm12 * w12;
    var tw14 = mm14 * w14;
    var tw16 = mm16 * w16;
    var tw20 = mm20 * w20;
    var tw24 = mm24 * w24;
    var tw28 = mm28 * w28;
    var tw30 = mm30 * w30;
    var tw32 = mm32 * w32;
    document.getElementById("tw6").innerHTML = tw6.toFixed(2)+" Kg";
    document.getElementById("tw8").innerHTML = tw8.toFixed(2)+" Kg";
    document.getElementById("tw10").innerHTML = tw10.toFixed(2)+" Kg";
    document.getElementById("tw12").innerHTML = tw12.toFixed(2)+" Kg";
    document.getElementById("tw14").innerHTML = tw14.toFixed(2)+" Kg";
    document.getElementById("tw16").innerHTML = tw16.toFixed(2)+" Kg";
    document.getElementById("tw20").innerHTML = tw20.toFixed(2)+" Kg";
    document.getElementById("tw24").innerHTML = tw24.toFixed(2)+" Kg";
    document.getElementById("tw28").innerHTML = tw28.toFixed(2)+" Kg";
    document.getElementById("tw30").innerHTML = tw30.toFixed(2)+" Kg";
    document.getElementById("tw32").innerHTML = tw32.toFixed(2)+" Kg";
    
    var totalWeight= tw6+tw8+tw10+tw12+tw14+tw16+tw20+tw24+tw28+tw30+tw32;
    document.getElementById("kgs").innerHTML=(totalWeight).toFixed(2)+" Kg";
    document.getElementById("tons").innerHTML=(totalWeight/1000).toFixed(3)+" Ton";
    document.getElementById("kgst").innerHTML=(totalWeight).toFixed(2)+" Kg";
    document.getElementById("tonst").innerHTML=(totalWeight/1000).toFixed(3)+" Ton";
}