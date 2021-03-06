<!-- load header in page/header -->
@include('page/header')

<!-- load sidebar in page/sidebar -->
@include('page/sidebar')

<script>
function ff(){
        var campur = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZ";
        var panjang = 8;
        var prefix = 'BKU';
        var buku = $("#judul").val();
        var f = buku.toUpperCase();
        var l = f.split(" ").join("");
        var z = l.substr(0,7);
      console.log(z);
        
        var random_all = '';
        for (var i=0; i<panjang; i++) {
            var hasil = Math.floor(Math.random() * campur.length);
            random_all += campur.substring(hasil,hasil+1);
        }
        $("#valuenya").val(prefix+"-"+z+""+random_all+"");
    };
</script>

<div class="content">
	<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Pendaftaran buku</h4>
                </div>
                <div class="content">
                {{ Form::open(['url' => '/proses_editbuku' ]) }}
					
					@foreach ($query as $k)
                        <div class="row">
                            <div class="col-md-12">
                            <label>JUDUL BUKU</label>
                                <div class="form-group">
                                    <input type="text" name="judul_buku" id="judul" value="{{ $k->judul_buku }}" class="form-control" placeholder="Judul buku..." required >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                            <label>KATEGORI BUKU</label>
                                <div class="form-group">
                                    <input type="text" name="kategori_buku" value="{{ $k->kategori_buku }}" class="form-control" placeholder="Kategori buku..." required>
                                </div>
                            </div>
                              
                        
                            <div class="col-md-6">
                            <label>PENGARANG BUKU</label>
                                <div class="form-group">
                                    <input type="text" name="pengarang_buku" value="{{ $k->pengarang_buku }}" class="form-control" placeholder="Pengarang buku..." required>
                                </div>
                            </div>
                        </div>            
                        <div class="row">
                            <div class="col-md-6">
                            <label>PENERBIT BUKU</label>
                                <div class="form-group">
                                    <input type="text" name="penerbit_buku" value="{{ $k->penerbit_buku }}" class="form-control" placeholder="Penerbit buku..." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <label>JUMLAH HALAMAN</label>
                                <div class="form-group">
                                    <input type="number" name="jumlah_halaman" value="{{ $k->jumlah_halaman }}" class="form-control" placeholder="Jumlah halaman buku..." required>
                                </div>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-md-4">
                            <label>KODE BUKU</label>
                                <div class="form-group">
									<input type="text" id="valuenya" value="{{ $k->id }}" style="display:none;" readonly name="id_buku" class="form-control" placeholder="Akan dibuat otomastis..." required>
                                    <input type="text" id="valuenya" value=" {{ $k->kode_buku }} " readonly name="kode_buku" class="form-control" placeholder="Akan dibuat otomastis..." required>
                                </div>
                                 <!-- <a href="javascript:void(0)" onclick="ff()" class="btn btn-primary" disabled>Generate kode</a> -->
                            </div>
                        </div>               
                    @endforeach
                            <button type="submit" onclick="return hapus_confirm()" class="btn btn-info btn-fill pull-right">Submit</button>
                            
                        <div class="clearfix"></div>
                        
                        
                        
                    </form>
                
            </div>
        </div>
        
        
        
    </div>
    </div>
</div>
</div>


@include('page/footer')

</body>

<!--   Core JS Files   -->
@include('page/js')

</html>
