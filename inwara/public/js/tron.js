$(function(){
  $.ajax({
    url:"/tron",
    type:"POST",
    data:{
      _token:$("#csrf").val()
    },
    success:function(Response){
      console.log(JSON.parse(Response));
      var result = JSON.parse(Response);
      console.log(result.field[0].value);
      console.log(result.field[94]);
      $('#Designation').html(result.field[94].value);
    //  $.each(result.field , function(i,value){
    //    console.log(value.name+":"+value.value);
    //  })


    //  console.log(result.table.records);
    }
  });
});
