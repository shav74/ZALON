let i = 0;
function changeText() {
  var x = document.getElementById("book-change");
  var services = ["haircut", "nails", "makeup", "facial", "spa", "ZALON"];
  if (i == services.length - 1) {
    x.style.color = "#f54242";
  } else {
    x.style.color = "#e39c9c";
  }
  x.innerHTML = services[i];
  i++;
  if (i >= services.length) {
    i = 0;
  }
  setTimeout(changeText, 2000);
}

function main() {
  changeText();
}
