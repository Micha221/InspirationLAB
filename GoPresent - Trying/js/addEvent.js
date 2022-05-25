const events = [];

function createEvent(startDate, title, endDate) {
  const event = {
    id: 1, // You must use a custom id generator
    title: title,
    start: startDate,
    allDay: endDate ? endDate : true // If there's no end date, the event will be all day of start date
  }

  events.push(event);
}

window.location.replace("index.php")