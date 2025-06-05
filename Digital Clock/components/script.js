function updateClock () {
  const clockElement = document.getElementById("clock");

  const now = new Date()

  let hours = now.getHours().toString().padStart(2,'0');
  let minutes = now.getMinutes().toString().padStart(2,'0');
  let seconds = now.getSeconds().toString().padStart(2,'0');

  const currentTime = `${hours}:${minutes}:${seconds}` ;
  clockElement.innerText = currentTime ;

}

// update every second 
setInterval(updateClock,1000);

// initialize imediately 
updateClock();
