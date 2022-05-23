
    $(document).ready(function () {
        var calendar = $('#calendar').fullCalendar({
            editable: true,
            events: "fetch-event.php",
            displayEventTime: false,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            select: function (date, allDay) {
                var title = prompt('Event Title:');

                if (title) {
                    var date = $.fullCalendar.formatDate(date, "Y-MM-DD HH:mm:ss");

                    $.ajax({
                        url: 'add-event.php',
                        data: 'title=' + title + '&date=' + date,
                        type: "POST",
                        success: function (data) {
                            displayMessage("Added Successfully");
                        }
                    });
                    calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                date: date,
                                allDay: allDay
                            },
                    true
                            );
                }
                calendar.fullCalendar('unselect');
            },
            
            editable: true,
            eventDrop: function (event, delta) {
                        var date = $.fullCalendar.formatDate(event.date, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: 'edit-event.php',
                            data: 'title=' + event.title + '&date=' + date + '&id=' + event.id,
                            type: "POST",
                            success: function (response) {
                                displayMessage("Updated Successfully");
                            }
                        });
                    },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: "delete-event.php",
                        data: "&id=" + event.id,
                        success: function (response) {
                            if(parseInt(response) > 0) {
                                $('#calendar').fullCalendar('removeEvents', event.id);
                                displayMessage("Deleted Successfully");
                            }
                        }
                    });
                }
            }

        });
    });

function displayMessage(message) {
	    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
}