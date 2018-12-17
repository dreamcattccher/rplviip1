$(document).ready(function(){
    ambilMatakuliah($("#kelas").val());

    $("#kelas").change(function(){
        ambilMatakuliah($(this).val());
    })
})

function ambilMatakuliah(idkelas){
    $.ajax({
        url: "absensi/matakuliah/"+idkelas,
        type: "POST",
        dataType: "JSON",
        success: function(data){
            if(data){
                var html="";
                $.each(data,function(key,item){
                    html += "<option value='" + item.idmatakuliah + "'>" + 
                                item.nama + "</option>";
                })
                $("#matakuliah").html(html);
            }
        }
    })
}
