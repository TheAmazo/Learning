//COUNTER PROGRAM

const decreaseBt = document.getElementById("decreaseBt");
const resetBt = document.getElementById("resetBt");
const increaseBt = document.getElementById("increaseBt");
const countLabel = document.getElementById("countLabel");

let count = 0;

increaseBt.onclick = function () {
  count++;
  countLabel.textContent = count;
};
decreaseBt.onclick = function () {
  count--;
  countLabel.textContent = count;
};
resetBt.onclick = function () {
  count = 0;
  countLabel.textContent = count;
};
