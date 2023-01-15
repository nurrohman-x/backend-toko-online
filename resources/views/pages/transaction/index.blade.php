@extends('layouts.default')

@section('content')
<div class="orders">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Daftar Transaction</h4>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Total Transaction</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transaction as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->number }}</td>
                                    <td>$ {{ $data->transaction_total }}</td>
                                    <td>
                                        @if($data->transaction_status == 'PENDING')
                                        <span class="badge badge-info">PENDING</span>
                                        @elseif($data->transaction_status == 'SUCCESS')
                                        <span class="badge badge-success">SUCCESS</span>
                                        @elseif($data->transaction_status == 'FAILED')
                                        <span class="badge badge-info">FAILED</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#mymodal" data-remote="{{ route('transaction.show', $data->id) }}" data-toggle="modal" data-target="#mymodal" data-title="Detail Transaksi {{ $data->uuid }}" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('transaction.edit', $data->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('transaction.destroy', $data->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
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