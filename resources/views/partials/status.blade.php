@switch($status)
    @case(0)
        @include('partials.status.inativo')
    @break
    @case(1)
        @include('partials.status.ativo')
    @break
    @case(2)
        @include('partials.status.aguardando')
    @break
@endswitch