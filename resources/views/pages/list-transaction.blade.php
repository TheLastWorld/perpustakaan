@extends('layouts.app')
@section('title', 'List Transaksi')
@section('content')
    <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">

                <div class="header">
                  <h4 class="title">List Transaksi</h4>
                </div>
                <div class="content">
                  <div class="row">
                    <div class="col-md-8 pull-left">
                      <div class="font-icon-list">
                        <a class="btn btn-default submit" href={{route('page.create-transaction')}}>
                          <i class="pe-7s-plus"></i>
                        </a>
                        <button class="btn btn-default submit">
                          <i class="pe-7s-refresh"></i>
                        </button>
                      </div>
                    </div>
                    <div class="col-md-4 pull-right">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Pencarian..." value="">
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                      <thead>
                        <th>Buku</th>
                        <th>transactions</th>
                        <th>Petugas</th>
                        <th>Status</th>
                        <th>Tanggal Kembali</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                         @foreach ($transactions as $transaction)
                          <tr>
                            <td>{{ $transaction->book_id }}</td>
                            <td>{{ $transaction->user_id }}</td>
                            <td>{{ $transaction->petugas }}</td>
                            <td>{{ $transaction->status }}</td>
                            <td>
                              <a class="btn btn-default" href={{route('page.edit-transaction',['id' => $transaction->id])}}>
                                <i class="pe-7s-pen"></i>
                              </a>
                              <button class="btn btn-danger">
                                <i class="pe-7s-trash"></i>
                              </button>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
@section('scripts')
@endsection