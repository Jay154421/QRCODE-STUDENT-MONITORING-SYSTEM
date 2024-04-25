@error('idnumber')
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000",
        }
        toastr.error("{{ $message }}");
    </script>
@enderror
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
@error('year')
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000",
        }
        toastr.error("{{ $message }}");
    </script>
@enderror
@error('course')
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
@error('parent')
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
@if (session('error'))
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "10000",
        }
        toastr.error("{{ session('error') }}");
    </script>
    @php
        session()->forget('error');
    @endphp
@endif
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
