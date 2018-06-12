jQuery(function(){
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //January is 0!
  var yyyy = today.getFullYear();
  
  if(dd<10) {
      dd = '0'+dd
  } 
  if(mm<10) {
      mm = '0'+mm
  } 
  today = dd + '/' + mm + '/' + yyyy;
    $('.al-date').datepicker({
      format: 'dd-mm-yyyy',
      language: 'es',
      autoclose: true,
      startDate: today,
      endDate: "31/12/2100",
      startView: 0,
      todayBtn: "linked",
      todayHighlight: "true"
    });
  });
