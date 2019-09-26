



$('#add-task').click(addTask);
$('#id-name') & $('#task-name').on('keypress', function (event) {
    if (event.keyCode == 13){
        addTask();
    }
});
function addTask(){
    var el = '<li>' + $('#task-name').val(); + $('#id-name').val(); + '<li>'
    $('#task-list').prepend(el);
    $('#id-name').val('')
    $('#task-name').val('')
}



  