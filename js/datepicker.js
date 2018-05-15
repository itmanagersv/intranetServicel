jQuery(function(){
    $('.al-date').datepicker({
      format: 'dd-mm-yyyy',
      language: 'es',
      autoclose: true,
      startDate: "07/05/2018",
      endDate: "31/12/2100",
      startView: 0,
      todayBtn: "linked",
      todayHighlight: "true"
    });
  });
