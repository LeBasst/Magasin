var know = {
    "hey" : "ca va ?",
    "comment vas ?" : "tu vien plus aux soirees ?",
    "le meme que nico !" : "je sais ;-)",
};
function talk() {
    var user = document.getElementById("userBox").value;
    document.getElementById("userBox").value = "";
    document.getElementById("chatLog").innerHTML += user+"<br>";
    if (user in know) {
        document.getElementById("chatLog").innerHTML += know[user]+"<br>";
    } else {
        document.getElementById("chatLog").innerHTML += "je ne suis pas debile !<br>";
    }
}