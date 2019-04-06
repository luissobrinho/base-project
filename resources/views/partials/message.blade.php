@if (Session::has('message') && ! is_array(Session::get('message')))
    <script>
       $(document).ready(function () {
           notify(' Sucesso ', ' {{ Session::get('message') }} ', '', 'top', 'right', '', 'success', 'animated fadeInDown', 'animated fadeOutUp');
       })
    </script>
@endif