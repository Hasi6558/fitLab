let text1 = [
    "LONGEVITY",
    "SEMI-PRIVATE"
];
let text2 = [
    "FITNESS",
    "TRAINING"
];
let index=0;
function updateText(){
    let textElement1 = document.getElementById("cover_title");
    textElement1.innerHTML =text1[index];

    let textElement2 = document.getElementById("cover_sub_title");
    textElement2.innerHTML =text2[index];
    index= (index+1)%text1.length;
}
setInterval(updateText, 3000);