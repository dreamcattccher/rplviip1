$(document).ready(function(){
    tampilMahasiswa();

    $("#reload").click(function(){
        tampilMahasiswa();
    });

    $("#tambah").click(function(){
        $("form")[0].reset();
        $("#mode").html("Tambah");
        $("#form-mahasiswa").modal("show");
    });

    $("tbody").on("click","#rubah",function(){
        $("form")[0].reset();
        $("#mode").html("Rubah");
        $("#form-mahasiswa").modal("show");
    });

    $("#simpan").click(function(){
        simpanMahasiswa();
        $("#form-mahasiswa").modal("hide");
    });
})

function simpanMahasiswa(){
    $.ajax({
        url: "mahasiswa/simpan",
        type: "POST",
        data: $("form").serialize(),
        dataType: "JSON",
        success: function(data){
            if(data.status){
                tampilMahasiswa();
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
                            "<td><button id='rubah' class='btn btn-warning btn-block'>" +
                                "<span class='glyphicon glyphicon-pencil'></span> Rubah</button>" +
                            "</td>" +
                            "<td><button class='btn btn-danger btn-block'>" +
                                "<span class='glyphicon glyphicon-trash'></span> Hapus</button>" +
                            "</td>" + 
                        "</tr>";
            }
            $("tbody").html(html);
        }
    })
}