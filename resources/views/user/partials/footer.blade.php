    <script src="{{ asset('frontend') }}/js/plugin/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugin/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugin/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugin/"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire('{{ session('success') }}')
        </script>
    @endif

    @yield('scripts')
</body>
</html>
