@extends('layout.app')
@section('title')
    <p class="fs-2 mt-5">
        Listado de proyectos
    </p>
@endsection

@section('content')
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        @if ($path === 'find')
            <a href="{{ route('indexProyectos', $proyectos) }}" class="btn btn-primary"><i class="bi bi-x-octagon"></i> Limpiar busqueda</a>
        @endif
        <a href="{{ route('createProyectos')}}" class="btn btn-success me-md-2" type="button">Crear proyecto <i class="bi bi-node-plus"></i></a>
    </div>
    <div class="row">
        @forelse ( $proyectos as $proyecto )
        <div class="col-12 col-md-3">
            <div class="card mt-3 largo"">
                <div class="d-flex justify-content-center align-items-center mt-2">
                    <img src="{{ asset('idea.png') }}" class="rounded" width="200" alt="{{ $proyecto->NombreProyecto }}-{{$proyecto->id}}">
                </div>
                <div class="card-body">
                    <h5 class="card-title fs-3 text-uppercase text-center font-weight-bold">{{ $proyecto->NombreProyecto}}</h5>
                    <p class="card-text"> {{ $proyecto->descripcion }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Suministra fondos:</strong> {{ $proyecto->FuenteFondos }}</li>
                    <li class="list-group-item"><strong>Monto planificado:</strong> ${{ number_format($proyecto->MontoPlanificado) }}</li>
                    <li class="list-group-item"><strong>Monto patrocinado:</strong> ${{ number_format($proyecto->MontoPatrocinado) }}</li>
                    <li class="list-group-item"><strong>Fecha de inicio:</strong> {{ $proyecto->formatDate($proyecto->FechaInicio) }}</li>
                    <li class="list-group-item"><strong>Fecha de finalización:</strong> {{ $proyecto->formatDate($proyecto->FechaFin) }}</li>
                </ul>
                <div class="card-body d-flex flex-cloumn justify-content-between">
                    <div>
                        {{-- <form action="{{route('destroyProyectos', $proyecto)}}" method="post">
                            @csrf
                            @method("delete") --}}
                            <button type="button" class="bg-danger text-white btn " id="deleteX"><i class="bi bi-trash3"></i> Eliminar</button>
                        {{-- </form> --}}
                    </div>
                    <div>
                        <form action="{{ route('updateProyectos', $proyecto)}}" method="GET">
                            {{-- @csrf --}}
                            <button type="submit" class="bg-primary text-white btn "><i class="bi bi-pencil-square"></i> Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <p>No hay proyectos aun....</p>
        @endforelse
    </div>
    <div class="w-100 d-flex justify-content-center align-items-center mt-3">
        {{ $proyectos->links() }}
    </div>

<style>
    @media (min-width: 655px) {
        .largo{
            width: 22em;
        }
    }

    @media (max-width: 279px) {
        .largo{
            width: 18em;
        }
    }
</style>
@endsection


@push('scripts')
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById("deleteX").addEventListener("click", function(item) {
        // alert('hola');
        console.log(item);
        Swal.fire({
            title: 'Are you sure?',
            text: `You won't be able to revert this! ${item}`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
                // window.locate = href = '/'
            }
        })
    });
</script> --}}
@endpush

