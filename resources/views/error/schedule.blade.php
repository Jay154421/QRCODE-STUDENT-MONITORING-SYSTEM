@error('subjcode')
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000",
        }
        toastr.error("{{ $message }}");
    </script>
@enderror
@error('section')
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000",
        }
        toastr.error("{{ $message }}");
    </script>
@enderror
@error('description')
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000",
        }
        toastr.error("{{ $message }}");
    </script>
@enderror
@error('unit')
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000",
        }
        toastr.error("{{ $message }}");
    </script>
@enderror
@if (session('success'))
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "10000",
        }
        toastr.success("{{ session('success') }}");
    </script>
    @php
        session()->forget('success');
    @endphp
@endif
