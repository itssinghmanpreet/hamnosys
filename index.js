function playCount(value) {
    play(count[value - 1]);
}

function playSentence() {
    play(data[document.querySelector("select#action").value].sigml);
}

function play(value) {
    CWASA.stopSiGML();
    CWASA.playSiGMLText(value);
}