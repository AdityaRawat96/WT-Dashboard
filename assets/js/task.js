function addTask(){

  $.ajax({
      type: 'POST',
      url: 'addTask.php',
      data: { task_category: $('#task_category').val(), task_id: $('#task_id').val(), task_name: $('#task_name').val(), task_description: $('#task_description').val(), task_deadline: $('#task_deadline').val() },

  beforeSend: function() {

  },
      success: function(response) {
          alert('Data Successfully inserted');
                   }
  });
  
}
