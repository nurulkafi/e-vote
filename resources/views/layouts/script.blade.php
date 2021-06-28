    <script src="{{ asset('js/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>
    <script src="{{ asset('js/pages/dashboard.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
    <script src="{{ asset('vendors/choices.js/choices.min.js') }}"></script>
    <script>
        const dataTable = new simpleDatatables.DataTable("#table1", {
        })
    </script>
    @stack('simditor')
    @stack('chart')
</html>
