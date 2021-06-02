// get the current month
const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
const today = new Date();
const month = monthNames[today.getMonth()];

const monthData = document.querySelector(".current-month");
monthData.innerHTML = month;

