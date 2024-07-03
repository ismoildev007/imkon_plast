<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Buyurtmalar</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row mb-3">
                <div>
                    <a class="btn btn-primary" href="{{ route('order.create') }}">Yaratish</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body ">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th scope="col">Ism Familiya</th>
                                    <th scope="col">Rangi</th>
                                    <th scope="col">balandligi</th>
                                    <th scope="col">Eni</th>
                                    <th scope="col">Soni</th>
                                    <th scope="col">Turi (Deraza...)</th>
                                    <th scope="col">Telefon raqam</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $reg)
                                    <tr>
                                        <td>{{ $reg->full_name }}</td>
                                        <td>{{ $reg->color }}</td>
                                        <td>{{ $reg->size_height }}</td>
                                        <td>{{ $reg->size_weight }}</td>
                                        <td>{{ $reg->shirt }}</td>
                                        <td>{{ $reg->type }}</td>
                                        <td>{{ $reg->phone_number }}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('order.edit', ['order' => $reg->id]) }}">
                                                    @if($reg->status == 'yangi')
                                                        <p style="color: red">{{$reg->status}} <i class="fa fa-edit"></i></p>
                                                    @else
                                                        <p style="color: blue">{{$reg->status}} <i class="fa fa-edit"></i></p>
                                                    @endif
                                                </a>
                                                <form action="{{ route('order.destroy', ['order'=> $reg->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn text-danger" style="margin-top: -6px;"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $orders->links() }}
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->

</x-layouts.admin>