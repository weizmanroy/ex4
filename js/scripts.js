$(document).ready(function () {
  $("#submitButton").click(function () {
    checked = $("input[type=checkbox]:checked").length;

    if (checked < 2) {
      alert("You must check at least two checkbox.");
      return false;
    }
  });
});
