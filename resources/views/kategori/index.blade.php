@extends('layouts.admin')
@section('content')
<<<<<<< HEAD
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Table Kategori</h3>
                <p class="text-subtitle text-muted">
                Perhatikan Kategori sebelum menambah mengedit ataupun menghapus !
                </p>
            </div>
    </div>
</div>


    <!-- Basic Tables start -->
    <div class="card">
            <div class="box-header with-border">
            <div class="buttons">
            <button onclick="addForm('{{ route('produk.store') }}')" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></button>
            <div class="card-body">
                    <table class="table table-stiped table-bordered">
                        <thead>
                            <th width="5%">No</th>
                            <th>Kategori</th>
                            <th class="text-center">Action</th>
                        </thead>
                    </table>
                </form>
            </div>
    </div>
</div>

    @includeIf('kategori.form')

    @endsection



    @push('scripts')
    <script>
    let table;
    $(function () {
        table = $('.table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('kategori.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'nama_kategori'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
        });
        $('#modal-form').validator().on('submit', function (e) {
            if (! e.preventDefault()) {
                $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                    .done((response) => {
                        $('#modal-form').modal('hide');
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menyimpan data');
                        return;
                    });
            }
        });
    });
    function addForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah Kategori');
        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=nama_kategori]').focus();
    }
    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Kategori');
        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=nama_kategori]').focus();
        $.get(url)
            .done((response) => {
                $('#modal-form [name=nama_kategori]').val(response.nama_kategori);
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            });
    }
    function deleteData(url) {
        if (confirm('Yakin ingin menghapus data terpilih?')) {
            $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
        }
    }
</script>
    @endpush
=======
    <div class="page-title">
            <div class="row">
              <div class="col-md-12">
                <h3>Table Kategori</h3>
              </div>
        </div>
        
          <!-- Basic Tables start -->
            <div class="card">
              <div class="card-header">jQuery Datatable</div>
              <div class="card-body">
                <table class="table" id="table1">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>City</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Graiden</td>
                      <td>vehicula.aliquet@semconsequat.co.uk</td>
                      <td>076 4820 8838</td>
                      <td>Offenburg</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Dale</td>
                      <td>fringilla.euismod.enim@quam.ca</td>
                      <td>0500 527693</td>
                      <td>New Quay</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Nathaniel</td>
                      <td>mi.Duis@diam.edu</td>
                      <td>(012165) 76278</td>
                      <td>Grumo Appula</td>
                      <td>
                        <span class="badge bg-danger">Inactive</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Darius</td>
                      <td>velit@nec.com</td>
                      <td>0309 690 7871</td>
                      <td>Ways</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Oleg</td>
                      <td>rhoncus.id@Aliquamauctorvelit.net</td>
                      <td>0500 441046</td>
                      <td>Rossignol</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Kermit</td>
                      <td>diam.Sed.diam@anteVivamusnon.org</td>
                      <td>(01653) 27844</td>
                      <td>Patna</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Jermaine</td>
                      <td>sodales@nuncsit.org</td>
                      <td>0800 528324</td>
                      <td>Mold</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Ferdinand</td>
                      <td>gravida.molestie@tinciduntadipiscing.org</td>
                      <td>(016977) 4107</td>
                      <td>Marlborough</td>
                      <td>
                        <span class="badge bg-danger">Inactive</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Kuame</td>
                      <td>Quisque.purus@mauris.org</td>
                      <td>(0151) 561 8896</td>
                      <td>Tresigallo</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Deacon</td>
                      <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                      <td>07740 599321</td>
                      <td>Karapınar</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Channing</td>
                      <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                      <td>0845 46 49</td>
                      <td>Warrnambool</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Aladdin</td>
                      <td>sem.ut@pellentesqueafacilisis.ca</td>
                      <td>0800 1111</td>
                      <td>Bothey</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Cruz</td>
                      <td>non@quisturpisvitae.ca</td>
                      <td>07624 944915</td>
                      <td>Shikarpur</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Keegan</td>
                      <td>molestie.dapibus@condimentumDonecat.edu</td>
                      <td>0800 200103</td>
                      <td>Assen</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Ray</td>
                      <td>placerat.eget@sagittislobortis.edu</td>
                      <td>(0112) 896 6829</td>
                      <td>Hofors</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Maxwell</td>
                      <td>diam@dapibus.org</td>
                      <td>0334 836 4028</td>
                      <td>Thane</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Carter</td>
                      <td>urna.justo.faucibus@orci.com</td>
                      <td>07079 826350</td>
                      <td>Biez</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Stone</td>
                      <td>velit.Aliquam.nisl@sitametrisus.com</td>
                      <td>0800 1111</td>
                      <td>Olivar</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Berk</td>
                      <td>fringilla.porttitor.vulputate@taciti.edu</td>
                      <td>(0101) 043 2822</td>
                      <td>Sanquhar</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Philip</td>
                      <td>turpis@euenimEtiam.org</td>
                      <td>0500 571108</td>
                      <td>Okara</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Kibo</td>
                      <td>feugiat@urnajustofaucibus.co.uk</td>
                      <td>07624 682306</td>
                      <td>La Cisterna</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Bruno</td>
                      <td>elit.Etiam.laoreet@luctuslobortisClass.edu</td>
                      <td>07624 869434</td>
                      <td>Rocca d"Arce</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Leonard</td>
                      <td>blandit.enim.consequat@mollislectuspede.net</td>
                      <td>0800 1111</td>
                      <td>Lobbes</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Hamilton</td>
                      <td>mauris@diam.org</td>
                      <td>0800 256 8788</td>
                      <td>Sanzeno</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Harding</td>
                      <td>Lorem.ipsum.dolor@etnetuset.com</td>
                      <td>0800 1111</td>
                      <td>Obaix</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Emmanuel</td>
                      <td>eget.lacus.Mauris@feugiatSednec.org</td>
                      <td>(016977) 8208</td>
                      <td>Saint-Remy-Geest</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
@endsection
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
