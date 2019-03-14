function addTask(){
  //alert($('#task_category').val());

  if($('#task_category').val()==null)
  {
    alert("Task category cannot be left empty!");
    $('#task_category').focus();
    return false;
  }
  else if($('#task_name').val()=='')
  {
    alert("Task Name cannot be left empty!");
    $('#task_name').focus();
    return false;
  }
  else if($('#task_description').val()=='')
  {
    alert("Task description cannot be left empty!");
    $('#task_description').focus();
    return false;
  }
  else if($('#task_deadline').val()=='')
  {
    alert("Task deadline cannot be left empty!");
    $('#task_deadline').focus();
    return false;
  }
  else
  {
    if(navigator.onLine)
    {
      var taskId = ($('#task_category')).val();
      var fname = taskId.substring(0,taskId.indexOf(" "));
      var lname = taskId.substring(taskId.indexOf(" ")+1,taskId.length);
      taskId=" ";
      taskId = fname.substring(0,1)+lname.substring(0,1)+Math.floor(Date.now() /1000);

      $.ajax({
        type: 'POST',
        url: '../php/addTaskDatabase.php',
        data: { task_id: taskId, task_category: $('#task_category').val(), task_name: $('#task_name').val(), task_description: $('#task_description').val(), task_deadline: $('#task_deadline').val(), task_status: "PENDING"},
        beforeSend: function() {

        },
        success: function(response) {
          alert(response);
        }
      });
    }
    else
    {
      alert('no internet connection');
    }
  }
}
