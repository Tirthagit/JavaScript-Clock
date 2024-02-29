function startTime(){
     //Function to start displaying current time

     //Get  the current date and time
     const date = new Date();
     const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
     const dayArr = ["Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]; 

     
     //Extract hours, minutes, seconds from the current time
     let h = date.getHours();
     let m = date.getMinutes();
     let s = date.getSeconds();
     let am_pm = "AM";
     

     //Setting time for 12 hour format

     // if(h > 12){
     //      h = h - 12;
     //      am_pm = "PM";
     // }else if (h==12){
     //      h = 12;
     //      am_pm = "AM";
     // }

     if (h >= 12) {
          if (h > 12) h -= 12;
          am_pm = "PM";
     } else if (h == 0) {
          h = 12;
          am_pm = "AM";
     }

     //Call the checkTime() function to add leading zeroes when needed
     m = checkTime(m);
     s = checkTime(s);
     h = checkTime(h);

     //This setTimeOut() function is used to call the startTime() function every 1 second (1000 miliseconds)
     setTimeout(startTime, 1000);

     //Displaying the time using Document Object Model in the browser window
     document.getElementById("txt").innerHTML = h + ":" + m + ":" + s + " " + am_pm;
     document.getElementById("day").innerHTML = `${dayArr[date.getDay()]} <br> ${date.getDate()} ${monthNames[date.getMonth()]} ${date.getFullYear()}`;

}

//Function to add leading zeroes if the number is less then 10
function checkTime(i){
     if(i < 10){
          i =  "0" + i; 
     }
     return i;
}
