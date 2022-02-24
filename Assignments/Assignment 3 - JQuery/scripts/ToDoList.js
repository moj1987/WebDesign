$(function(){
    $("#addButton").on("click", createNewTask);
      
    var tasksList = $("<ol>");

    // Creates a new task
    function createNewTask()
    {
        var inputString = $("#newItemText").val();
        var doneButton = $('<input/>', {type:"button", class:"doneButton", value:"Done"})
        
        var removeButton = $('<input/>', {type:"button", class:"removeButton", value:"Remove"})
        var newLi = $("<li>");

        newLi.append(inputString)
        newLi.append(doneButton)
        newLi.append(removeButton)
        tasksList.append(newLi)

        $('#taskList').html(tasksList);

        $("#newItemText").val("")
    }
});

// Remove done button and andd undo
$(document).on('click', '.doneButton', function(){
    var undoButton = $('<input/>', {type:"button", class:"undoButton", value:"Undo"})

    $(this).after(undoButton);
    $(this).parent().css('text-decoration',' line-through');
    $(this).fadeOut();
});

// Remove the task
$(document).on('click', '.removeButton', function(){
    $(this).parent().fadeOut();
});

// Remove undo button and and done
$(document).on('click', '.undoButton', function(){
    var doneButton = $('<input/>', {type:"button", class:"doneButton", value:"Done"})

    $(this).after(doneButton);
    $(this).parent().css('text-decoration',' none');
    $(this).fadeOut();
});

