@extends('template.app')

@section('page-title')
    Daftar Kategori Produk
@endsection

@section('sub-title')
    Daftar kategori produk yang ada di <span class="text-success">tokopaedi</span>
@endsection

@section('content')
    <div class="card p-2 mt-4">
        <div class="d-flex justify-content-between">
            <div class="">
                <div class="card-title h6">Data Produk</div>
                <span class="text-muted">sub title Lorem ipsum dolor sit amet.</span>
            </div>
            <div class="">
                {{-- button diambil dari dokumentasi modal --}}
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </thead>
                <tbody>
                    <tr>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="#" method="post">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group mt-2">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control">
                        </div>
                         <div class="form-group mt-2">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
@endsection
