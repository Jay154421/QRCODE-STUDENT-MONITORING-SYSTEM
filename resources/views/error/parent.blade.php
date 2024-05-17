@error('name')
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000",
        }
        toastr.error("{{ $message }}");
    </script>
@enderror
@error('gender')
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000",
        }
        toastr.error("{{ $message }}");
    </script>
@enderror
@error('age')
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000",
        }
        toastr.error("{{ $message }}");
    </script>
@enderror
@error('address')
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000",
        }
        toastr.error("{{ $message }}");
    </script>
@enderror
@error('phone')
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000",
        }
        toastr.error("{{ $message }}");
    </script>
@enderror
@error('username')
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000",
        }
        toastr.error("{{ $message }}");
    </script>
@enderror
@error('password')
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
