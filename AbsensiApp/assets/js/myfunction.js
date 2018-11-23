function konversiSemester(nilai){
    var hasil = "";
    switch(nilai){
        case "1": hasil = "I"; break;
        case "2": hasil = "II"; break;
        case "3": hasil = "III"; break;
        case "4": hasil = "IV"; break;
        case "5": hasil = "V"; break;
        case "6": hasil = "VI"; break;
        case "7": hasil = "VII"; break;
        case "8": hasil = "VIII"; break;
    }
    return hasil;
}

function konversiJurusan(nilai){
    var hasil = "";
    if(nilai=="ti"){
        hasil = "Teknik Informatika";
    }else if(nilai=="si"){
        hasil = "Sistem Informasi";
    }
    return hasil;
}

function konversiSesi(nilai){
    var hasil = "";
    if(nilai=="p"){
        hasil = "Pagi";
    }else if(nilai="m"){
        hasil = "Malam";
    }
    return hasil;
}

function konversiStatusUser(nilai){
    var hasil = "";
    switch(nilai){
        case "AKD": hasil = "Akademik"; break;
        case "DOS": hasil = "Dosen"; break;
        case "MHS": hasil = "Mahasiswa"; break;
    }

    return hasil;
}