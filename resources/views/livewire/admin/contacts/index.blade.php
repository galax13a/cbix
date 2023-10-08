@extends('layouts.tema.appadmin')
@push('scripts-head')


@endpush
@push('scripts-body')

<script>
document.addEventListener('DOMContentLoaded', function () {    
    if (window.innerWidth <= 768) {
        var rows = document.querySelectorAll('table tbody tr');
        rows.forEach(function (row) {
            var cells = row.querySelectorAll('td');
            var headers = document.querySelectorAll('table th');
            cells.forEach(function (cell, index) {
                var label = headers[index].textContent;
                var strongLabel = document.createElement('strong');
                strongLabel.textContent = label + ': ';
                cell.prepend(strongLabel);
            });
        });
    }

    Livewire.hook('message.sent', () => {
     setTimeout(function() {
        if (window.innerWidth <= 660) {
        var rows = document.querySelectorAll('table tbody tr');
        rows.forEach(function (row) {
            var cells = row.querySelectorAll('td');
            var headers = document.querySelectorAll('table th');
            cells.forEach(function (cell, index) {
                var label = headers[index].textContent;
                var strongLabel = document.createElement('strong');
                strongLabel.textContent = label + ': ';
                cell.prepend(strongLabel);
            });
        });
    }
}, 1000); 
       
});

});
    </script>

@endpush
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('admincontacts')
        </div>     
    </div>   
</div>
@endsection
