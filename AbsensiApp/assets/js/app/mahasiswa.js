var mode = "";
$(document).ready(function(){
    tampilMahasiswa();

    $("#reload").click(function(){
        tampilMahasiswa();
    });

    $("#tambah").click(function(){
        mode = "add";
        $("form")[0].reset();
        $("#mode").html("Tambah");
        $("span.help-block").remove();
        $(".form-group").removeClass("has-error");
        $("#form-mahasiswa").modal("show");
    });

    $("tbody").on("click","#rubah",function(){
        mode = "edit";
        var id = $(this).data("id");
        bacaMahasiswa(id);
    });

    $("tbody").on("click","#hapus",function(){
        var id = $(this).data("id");
        hapusMahasiswa(id);
    });

    $("#simpan").click(function(){
        simpanMahasiswa();
    });
})

function showMessage(mode){
    var divMessage = "<div class='alert alert-success'>" +
                            "Berhasil <strong>" + mode.toUpperCase() + "</strong> Data Mahasiswa" +
                        "</div>";
    $(divMessage)
        .prependTo(".container")
        .delay(2000)
        .slideUp("slow");
}

function hapusMahasiswa(id){
    if(confirm("Anda yakin hapus ?")){
        $.ajax({
            url: "mahasiswa/hapus/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data){
                if(data.status){
                    tampilMahasiswa();
                    showMessage("delete");
                }
            }
        });
    }
}

function bacaMahasiswa(id){
    $("form")[0].reset();

    $.ajax({
        url: "mahasiswa/baca/"+id,
        type: "POST",
        dataType: "JSON",
        success: function(data){
            $("#nim").val(data.nim);
            $("#nama").val(data.nama);
            $("#alamat").val(data.alamat);
            $("#telepon").val(data.telepon);

            $("#mode").html("Rubah");
            $("#form-mahasiswa").modal("show");
        }
    })
}

function simpanMahasiswa(){
    $.ajax({
        url: "mahasiswa/simpan/"+mode,
        type: "POST",
        data: $("form").serialize(),
        dataType: "JSON",
        success: function(data){
            if(data.status){
                tampilMahasiswa();
                showMessage(mode);
                $("#form-mahasiswa").modal("hide");
            }else{
                $("span.help-block").remove();
                $(".form-group").removeClass("has-error");

                $.each(data.message,function(index,value){
                    $("input[name="+index+"]")
                        .after(value)
                        .parent()
                        .addClass("has-error");
                });
            }
        }
    })
}

function tampilMahasiswa(){
    $.ajax({
        type: "ajax",
        url: "mahasiswa/data",
        dataType: "JSON",
        success: function(data){
            var html = "";
            for(i=0;i < data.length;i++){
                html += "<tr>" + 
                            "<td>"+ data[i].nim +"</td>" + 
                            "<td>"+ data[i].nama +"</td>" + 
                            "<td>"+ data[i].alamat +"</td>" + 
                            "<td>"+ data[i].telepon +"</td>" +
                            "<td><button id='rubah' class='btn btn-warning btn-block' data-id='" + data[i].nim + "'>" +
                                "<span class='glyphicon glyphicon-pencil'></span> Rubah</button>" +
                            "</td>" +
                            "<td><button id='hapus' class='btn btn-danger btn-block' data-id='" + data[i].nim + "'>" +
                                "<span class='glyphicon glyphicon-trash'></span> Hapus</button>" +
                            "</td>" + 
                        "</tr>";
            }
            $("tbody").html(html);
        }
    })
}