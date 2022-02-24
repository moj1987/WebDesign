const panels = document.querySelectorAll(".panel");
panels.forEach(function (panel) {
  panel.addEventListener("click", function () {
    removeClass();
    panel.classList.add("active");
  });
});

function removeClass() {
  panels.forEach(function (panel) {
    panel.classList.remove("active");
  });
}

var p1 = {
  val: 20,
  Add: function (x) {
    this.val += x;
  },
  Log: function () {
    console.log(this.val);
  },
};
p1.Log();

var p2 = p1;

p1.Log();
p2.Log();

p2.Add(10);
p1.Log();
p2.Log();
