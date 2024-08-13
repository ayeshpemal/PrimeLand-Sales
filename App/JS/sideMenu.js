document.getElementById("urbanCat").style.display = "none";
document.getElementById("ruralCat").style.display = "none";
document.getElementById("urbanCat").style.height = "0px";
document.getElementById("ruralCat").style.height = "0px";
document
  .getElementById("urban")
  .addEventListener("click", () => showHideSubcat("urbanCat", "urbanArrow"));
document
  .getElementById("rural")
  .addEventListener("click", () => showHideSubcat("ruralCat", "ruralArrow"));

function showHideSubcat(subCatId, arrowId) {
  const subCat = document.getElementById(subCatId);
  const arrow = document.getElementById(arrowId);
  if (subCat.style.display == "block") {
    subCat.style.display = "none";
    subCat.style.height = "0px";
    arrow.style.transform = "rotate(0deg)";
  } else {
    subCat.style.display = "block";
    subCat.style.height = "auto";
    arrow.style.transform = "rotate(90deg)";
  }
}
