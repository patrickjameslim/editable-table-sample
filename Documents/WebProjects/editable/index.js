$(document).ready(function(){
    
    $("#quotation-editor").editableTableWidget();
    
    $('#quotation-editor #add-new').click(function(){
        $('#quotation-editor tr:last')
            .before("<tr>" +
                    "<td>&nbsp;</td>" +
                    "<td>&nbsp;</td>" +
                    "<td>&nbsp;</td>" +
                    "<td>&nbsp;</td>" +
                    "<td>&nbsp;</td>" +
                    "<tr>");
    
    $("#quotation-editor").editableTableWidget();
        
        });
    

});
    