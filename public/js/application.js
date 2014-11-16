$(document).ready(function() {
    $('#records').DataTable({
    	"info": false,
    	"lengthChange": false,
    	"oLanguage": {
         "sSearch": "Filter records: "
       }
    });
});