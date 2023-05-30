<div>
    <div>
        <input type="text" wire:model="searchTable" placeholder="Buscar...">
    
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Otro campo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $result)
                    <tr>
                        <td>{{ $result->id }}</td>
                        <td>{{ $result->estudio->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
</div>
