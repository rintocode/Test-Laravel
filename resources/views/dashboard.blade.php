<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mt-5">
                        <h2 class="mb-4 text-center">Test Laravel</h2>
                        <table id="myTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>submit_by</th>
                                    <th>submit_when</th>
                                    <th>site_code</th>
                                    <th>Activity</th>
                                    <th>Uom</th>
                                    <th>Block</th>
                                    <th>Task</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Mesin_id</th>
                                    <th>Fuel</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

                    </body>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
                    <script src="https://cdn.datatables.net/v/dt/dt-2.0.8/datatables.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
                    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
                    <script type="text/javascript">
                        $(function() {
                            var table = $('#myTable').DataTable({
                                processing: true,
                                serverSide: true,
                                ajax: "{{ route('dashboard') }}",
                                columns: [{
                                        data: 'id',
                                        name: 'id'
                                    },
                                    {
                                        data: 'submit_by',
                                        name: 'submit_by'
                                    },
                                    {
                                        data: 'submit_when',
                                        name: 'submit_when'
                                    },
                                    {
                                        data: 'site_code',
                                        name: 'site_code'
                                    },
                                    {
                                        data: 'Activity',
                                        name: 'Activity'
                                    },
                                    {
                                        data: 'Uom',
                                        name: 'Uom'
                                    },
                                    {
                                        data: 'Block',
                                        name: 'Block'
                                    },
                                    {
                                        data: 'Task',
                                        name: 'Task'
                                    },
                                    {
                                        data: 'Start',
                                        name: 'Start'
                                    },
                                    {
                                        data: 'End',
                                        name: 'End'
                                    },
                                    {
                                        data: 'Mesin_id',
                                        name: 'Mesin_id'
                                    },
                                    {
                                        data: 'Fuel',
                                        name: 'Fuel'
                                    }
                                ]
                            });
                        });
                    </script>
</x-app-layout>
