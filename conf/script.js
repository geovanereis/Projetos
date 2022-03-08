$('#den').on('change', function(){
   maquinas()
})

function maquinas(){

  if( $('#den').val() == "den" ){
  
    $('#den').css("display", "block");
    
  }else{
    $('#den').css("display", "none");
  }
}