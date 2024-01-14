@extends('layouts.staff.dashboard')

@section('title', 'Data Visitasi')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data Visitasi</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('staff')}}">Dashboard</a></div> 
          <div class="breadcrumb-item">Data Visitasi</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Data Visitasi</h2>
        <p class="section-lead">This article component is based on card and flexbox.</p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary p-4">
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">NAMA</th>
                                <th scope="col">USERNAME</th>
                                <th scope="col">EMAIL</th>
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
                                    {{ $item->username }}
                                </td>
                                <td>
                                    {{ $item->email }}
                                </td>
                                <td>
                                    <a href="{{ route('visitasi.show', $item->id) }}" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('visitasi.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('visitasi.destroy', $item->id) }}" method="POST"
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
</section>

@endsection