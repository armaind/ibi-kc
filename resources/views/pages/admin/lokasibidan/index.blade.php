@extends('layouts.admin.dashboard')

@section('title', 'Monitoring Pelayanan')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Lokasi Penempatan Bidan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('admin')}}">Dashboard</a></div> 
          <div class="breadcrumb-item">Lokasi Penempatan Bidan</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Lokasi Penempatan Bidan</h2>
        <p class="section-lead">---.</p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                    <div class="table-responsive">
                        <table id="example" class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nama Bidan</th>
                                    <th scope="col">Nomer Registrasi Bidan</th>
                                    <th scope="col">Lokasi Puskesmas</th>
                                    <th scope="col">OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <th scope="row">
                                        {{ $item->name }}
                                    </th>
                                    <td>
                                        {{ $item->nrbidan }}
                                    </td>
                                    <td>
                                        {{ $item->puskesmas }}
                                    </td>
                                    <td>
                                        {{-- <a href="{{ route('lokasi-bidan.show', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-eye"></i>
                                        </a> --}}
                                        <a href="{{ route('lokasi-bidan.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('lokasi-bidan.destroy', $item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

@endsection