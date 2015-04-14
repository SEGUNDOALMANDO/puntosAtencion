$(function() {

    $(".datepicker").datepicker();
    //$('#busqueda').css("text-transform", "uppercase");
    $('#busqueda').autocomplete({
        focus: function(event, ui) {
            // prevent autocomplete from updating the textbox
            event.preventDefault();
            // manually update the textbox
            $(this).val(ui.item.label);
        },
        source: function (request, response) {
            $.ajax({
                url: '../ajax/getResponsables',

                data: {
                    busqueda: this.term
                },
                success: function (data) {
                    // data must be an array containing 0 or more items
                    //console.log("[SUCCESS] " + data.length + " item(s)");
                    //response(data);
                    response( $.map( data, function( item ) {
                        return {
                            label: item.name,
                            value: item.id
                        };
                    }));
                }

            });
        },
        select: function (event, ui) {
            // prevent autocomplete from updating the textbox
            event.preventDefault();
            // manually update the textbox and hidden field
            $(this).val(ui.item.label);
            ui.item.idTipoParticipante=$('#typeParticipant option:selected').val();
            ui.item.labelTipoParticipante=$('#typeParticipant option:selected').text();
            participantes.agregar(ui.item);
            participantes.dibujar();

        }
    });

    var participantes   =   {
        lista: [],
        agregar:function(newparticipante){
            var existe=false;
            this.lista.forEach(function(participante) {
                console.log((newparticipante.value==participante.value)? 'true':'false');
                if((newparticipante.value==participante.value))
                    return existe=true;
            });
            if(!existe)
                this.lista.push(newparticipante);

        },
        dibujar : function(){
            $(".participantes tbody").html('');
            $('.participantes tbody .eliminar').unbind('click');
            this.lista.forEach(function(participante, key) {
               $(".participantes tbody").append('<tr>'+
                '<td>'+(key + 1)+'</td>'+
                '<td><input type="hidden" name="IdParticipante[]" value="'+participante.value+'"> '+participante.label+'</td>'+
                '<td><input type="hidden" name="IdTipoParticipante[]" value="'+participante.idTipoParticipante+'">'+ participante.labelTipoParticipante+'</td>'+
                '<td class="text-center">'+
                '<a  class="btn btn-danger btn-xs eliminar" data-key="'+ key +'"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>'+
                '</td>'+
                '</tr>');
            });
            $('.participantes tbody .eliminar').on('click', function(){
                participantes.eliminar(this)
            })
        },
        eliminar :  function(objet){
            var id=$(objet).attr('data-key');
            this.lista.splice(id, 1);
            $(objet).parents('tr').html("");
            console.log(this.lista.splice(id, 1), id);
        }

    };
});