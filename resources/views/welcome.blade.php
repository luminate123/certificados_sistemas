<x-layout>
    <div class="container">
        <div class="header mb-10">
            <p class="text-4xl font-semibold text-gray-900 dark:text-white">LISTA DE ESTUDIANTES</p>
        </div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Importar Excel</label>

        <form id="uploadForm" enctype="multipart/form-data">
            <div class="inline-block">
                <input class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" required id="fileInput" name="file" accept=".xlsx, .xls">
            </div>
            <div class="inline-block">
                <button type="submit" class="ml-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Subir</button>
            </div>
        </form>
        <script>
            document.getElementById('uploadForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const fileInput = document.getElementById('fileInput');
                const file = fileInput.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const data = new Uint8Array(e.target.result);
                    const workbook = XLSX.read(data, {
                        type: 'array'
                    });
                    const firstSheetName = workbook.SheetNames[0];
                    const worksheet = workbook.Sheets[firstSheetName];
                    const json = XLSX.utils.sheet_to_json(worksheet, {
                        header: 1
                    });

                    // Convertir la primera fila en encabezados
                    const headers = json[0];
                    const rows = json.slice(1).map(row => {
                        let obj = {};
                        headers.forEach((header, index) => {
                            obj[header] = row[index];
                        });
                        return obj;
                    });

                    // Enviar los datos JSON al backend
                    fetch('/api/import', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify(rows)
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log('Success:', data);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                };

                reader.readAsArrayBuffer(file);
            });
        </script>
        <table id="usuarios" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nombres</th>
                    <th>Email</th>
                    <th>Año de egreso</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->DNI }}</td>
                    <td>{{ $user->APELLIDO_PATERNO }}</td>
                    <td>{{ $user->APELLIDO_MATERNO }}</td>
                    <td>{{ $user->NOMBRES }}</td>
                    <td>{{ $user->EMAIL }}</td>
                    <td>{{ $user-> PERIODO_EGRESO }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap4.js"></script>
        <script>
            new DataTable('#usuarios', {
                
            });
        </script>
    </div>
</x-layout>