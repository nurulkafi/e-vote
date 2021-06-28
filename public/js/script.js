$(function(){
    $('#hapuss').on('click',function(){
        const nim = $(this).data('id');
        console.log(nim);
       $('#kafi').on('click',function(){
        console.log(nim);
        //    $(this).attr('href',"mahasiswa/delete/"+nim);
       });
    })
    $(document).ready(function(){
        $('.ShowData').on('click',function(){
            const nim = $(this).data('id');

                $.ajax({
                    url: 'mahasiswa/detail/'+nim,
                    data: {id : nim},
                    type: 'get',
                    dataType: 'json',
                    success: function(data){
                        $('#nim2').html("NIM                    : " + data.nim),
                        $('#nama2').html("NAMA                  : " +data.nama),
                        $('#tanggal-lahir').html("Tanggal Lahir : " +data.tgl_lahir),
                        $('#alamat2').html("Alamat : " +data.alamat),
                        $('.gambar').attr('src', "../"+data.photo)
                    }
                })
        })
        $('.delete').on('click',function(){
            const nim = $(this).data('id');
           $('.yesdel').on('click',function(){
               $(this).attr('href',"mahasiswa/delete/"+nim);
           });
        })
    })


});
