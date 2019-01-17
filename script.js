$(document).ready(function() {
      $("#saveBtn").click(function() {
         $.ajax({url: "addHoroscope.php", method: "POST", data: {birthDate: $("input").val()}, success: function(result) {
            console.log(result);
         }});
         updateDiv();
      });
      $("#updateBtn").click(function() {
         $.ajax({url: "updateHoroscope.php", method: "PUT", data: {birthDate: $("input").val()}, success: function(result) {
            console.log(result);
         }});
         updateDiv();
      });
      $("#deleteBtn").click(function() {
         $.ajax({url: "deleteHoroscope.php", method: "DELETE", success: function(result) {
         }});
         updateDiv();
      });
      function updateDiv() {
         $.ajax({url: "viewHoroscope.php", method: "GET", success: function(data){
            $(".horoscopeDiv").empty();
            $(".horoscopeDiv").append(data);
         }});
      }
      updateDiv();
});

