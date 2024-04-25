   @if ($errors->any())
   <script>
       toastr.options = {
           "progressBar": true,
           "closeButton": true,
           "timeOut": "10000",
       }
       toastr.error("{!! implode('', $errors->all(':message')) !!}");
   </script>
   @endif

   @if (session('error'))
   <div style="color:red">{{ session('error') }}</div>
   <script>
       toastr.options = {
           "progressBar": true,
           "closeButton": true,
           "timeOut": "5000",

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
           "timeOut": "5000",
       }
       toastr.success("{{ session('success') }}");
   </script>
   @php
   session()->forget('success');
   @endphp
   @endif