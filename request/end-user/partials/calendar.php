<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendar and Clock</title>
  <link rel="stylesheet" href="style.css">

  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.clock h2 {
  font-size: 2em;
  margin-bottom: 20px;
}

.calendar {
  text-align: center;
}

#month-year {
  font-size: 1.5em;
  margin-bottom: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  width: 14.28%;
  padding: 10px;
  text-align: center;
  border: 1px solid #ddd;
  cursor: pointer;
}

td:hover {
  background-color: #e2e2e2;
}

button {
  margin-top: 20px;
  padding: 10px 20px;
  font-size: 1em;
  cursor: pointer;
  background-color: #007BFF;
  color: white;
  border: none;
  border-radius: 5px;
}

button:hover {
  background-color: #0056b3;
}

#clock {
    font-size: 1.5rem;
    font-weight: 600;
    color: #4A4A4A;
}


  </style>
</head>
<body>


<div class="calendar bg-white p-6 rounded-lg shadow-lg">
<div id="clock" class="text-xl font-semibold text-gray-800 mt-4">
</div>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800" id="calendar-month">November 2024</h2>
        <div class="flex space-x-4">
            <button id="prev-month" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                Prev
            </button>
            <button id="next-month" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                Next
            </button>
        </div>
    </div>

    <div class="grid grid-cols-7 gap-4 text-center">
        <div class="font-semibold text-gray-600">Sun</div>
        <div class="font-semibold text-gray-600">Mon</div>
        <div class="font-semibold text-gray-600">Tue</div>
        <div class="font-semibold text-gray-600">Wed</div>
        <div class="font-semibold text-gray-600">Thu</div>
        <div class="font-semibold text-gray-600">Fri</div>
        <div class="font-semibold text-gray-600">Sat</div>

        <div id="calendar-days" class="col-span-7 mt-4 grid grid-cols-7 gap-4">
        </div>
    </div>
</div>


</body>
<script>

document.addEventListener('DOMContentLoaded', function () {
    let currentDate = new Date();
    const today = currentDate.getDate(); 

    const monthYearDisplay = document.getElementById('calendar-month');
    const calendarDaysContainer = document.getElementById('calendar-days');
    const prevMonthButton = document.getElementById('prev-month');
    const nextMonthButton = document.getElementById('next-month');

    function renderCalendar() {
        const month = currentDate.getMonth();
        const year = currentDate.getFullYear();

        const firstDayOfMonth = new Date(year, month, 1);
        const lastDayOfMonth = new Date(year, month + 1, 0);
        const daysInMonth = lastDayOfMonth.getDate();
        const firstDay = firstDayOfMonth.getDay();

        // Update the displayed month and year
        monthYearDisplay.textContent = `${firstDayOfMonth.toLocaleString('default', { month: 'long' })} ${year}`;

        calendarDaysContainer.innerHTML = '';

        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement('div');
            emptyCell.classList.add('text-transparent'); 
            calendarDaysContainer.appendChild(emptyCell);
        }

        // Create the calendar days
        for (let day = 1; day <= daysInMonth; day++) {
            const dayCell = document.createElement('div');
            dayCell.classList.add('px-4', 'py-2', 'text-gray-700', 'rounded-lg', 'cursor-pointer', 'hover:bg-indigo-100');

            // Check if the current day is today's date
            if (day === today && currentDate.getMonth() === new Date().getMonth() && currentDate.getFullYear() === new Date().getFullYear()) {
                dayCell.classList.add('bg-blue-500', 'text-white'); 
            }

            dayCell.textContent = day;
            calendarDaysContainer.appendChild(dayCell);
        }
    }

    prevMonthButton.addEventListener('click', function () {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    });

    nextMonthButton.addEventListener('click', function () {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    });

    renderCalendar(); 
});



document.addEventListener('DOMContentLoaded', function () {
    const clockElement = document.getElementById('clock');

    function updateClock() {
        const now = new Date();
        let hours = now.getHours();
        let minutes = now.getMinutes();
        let seconds = now.getSeconds();
        const ampm = hours >= 12 ? 'PM' : 'AM';

        hours = hours % 12;
        hours = hours ? hours : 12; 
        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;

        const timeString = `${hours}:${minutes}:${seconds} ${ampm}`;
        
      
        clockElement.textContent = timeString;
    }

    setInterval(updateClock, 1000);
    updateClock(); 
});


</script>
</html>
