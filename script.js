
let buses = [
  {
    arrived: "Bus 12 - City Center",
    arriving: "Bus 45 - Airport",
    next: "Bus 78 - Railway Station"
  },
  {
    arrived: "Bus 22 - Market",
    arriving: "Bus 51 - Hospital",
    next: "Bus 90 - College"
  },
  {
    arrived: "Bus 30 - Mall",
    arriving: "Bus 67 - IT Park",
    next: "Bus 101 - Stadium"
  }
];

let index = 0;


function updateBoard() {
  document.getElementById("arrived").innerText = buses[index].arrived;
  document.getElementById("arriving").innerText = buses[index].arriving;
  document.getElementById("next").innerText = buses[index].next;

  index++;
  if (index >= buses.length) {
    index = 0;
  }
}


updateBoard();


setInterval(updateBoard, 5000);