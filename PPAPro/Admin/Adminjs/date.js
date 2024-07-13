function updateTime() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    var timeString = hours + ":" + minutes + ":" + seconds;
    document.getElementById("current-time").textContent = " Time: " + timeString;
  
    var month = now.getMonth() + 1;
    var day = now.getDate();
    var year = now.getFullYear();
    var dateString = year + " / " + month + " / " + day;
    document.getElementById("current-date").textContent = " Date: " + dateString;
  }
  
  updateTime();
  setInterval(updateTime, 1000);