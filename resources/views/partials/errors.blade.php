@if (isset($errors))
    @if ($errors->count() > 0)
        <script>
            var message = '';

            @foreach ($errors->all() as $error)
                message += '{{ $error }}<br />';
            @endforeach

            notify(' Erro<br />', message, '', 'top', 'right', '', 'warning', 'animated fadeInDown', 'animated fadeOutUp');
        </script>
    @endif
@endif