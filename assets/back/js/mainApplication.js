$(function () {

    //CUANDO HAY UN CAMBIO EN EL SELECT
    $('#status_id').change(function(){
        var id = $('#status_id').val();
        $.post('request/ajax_getRequestByStatusId',{status_id:id}, function(data){
            $('#tabla_body').empty();
            console.log(data);
            for(var k in data) {
               $('#tabla_body')
                    .append(
                    	'<tr>'+
                                '<td>'+ data[k].id +'</td>'+
            					'<td>'+ data[k].cedula +'</td>'+
                                '<td>'+ data[k].nombre + '</td>' +
                                '<td>'+ data[k].type_request +'</td>'+
                                '<td>'+ data[k].date +'</td>'+
                                '<td>'+ data[k].create_at.substring(11, 19) +'</td>'+
            					'<td>'+ data[k].nameStatus +'</td>'+
            					'<td><a href="backend/solicitudes/veredicto/' + data[k].id + '">Ver solicitud</a></td>'+
            			'<tr/>'
                    );
            }
            	
        });
    });


    $('#type_applicant_id').change(function(){
        var id = $(this).val();
        if(id==1)
        {
            $('#dependence').fadeIn();
            $.post('dependence/ajax_getDependences',{},function(data){
                $('#dependence_id').empty();
                for(var k in data)
                {
                    $('#dependence_id').append(
                        '<option value="' + data[k].id + '">' + data[k].name + '</option>'
                    );
                }
            });
        }
        else
        {
            $('#dependence').fadeOut();
            $('#dependence_id').val(1); 
        }
    });

    $('#cedula').focusout(function(){
        var cedula = $(this).val();
        $.post('applicant/ajax_getApplicantData', {cedula:cedula}, function(data, status){
            $('#error_cedula').fadeOut();
            if($.isEmptyObject(data))
            {
                $('#error_cedula').fadeIn().html("Cedula no registrada.");
                $('#nombre').fadeIn().val('');
            }
            else
            {
                $('#error_cedula').fadeOut();
                $('#nombre').fadeIn().val(data.name);
            }
        });
    });
/*
    $("#date_picker").click(function(){
        var id = $(this).val("id");
        var val = $("label[for='" + id + "']").text();
        $("#msg").text(val + " changed");
    });*/
});
