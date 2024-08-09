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
    let textElement2 = document.getElementById("cover_sub_title");
    
    

    textElement1.classList.add("fade-out");
    textElement2.classList.add("fade-out");

    setTimeout(() => {
        textElement1.innerHTML = text1[index];
        textElement2.innerHTML = text2[index];
        textElement1.classList.remove("fade-out");
        textElement2.classList.remove("fade-out");
        index = (index + 1) % text1.length;
    }, 1000);

}
setInterval(updateText, 3000);