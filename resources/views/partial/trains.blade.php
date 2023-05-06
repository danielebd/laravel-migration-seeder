@foreach ($trains as $item)
    <ul class="col ">
        <li>Azienda: {{ $item['company'] }}</li>
        <li>Stazione Partenza: {{ $item['departure_station'] }}</li>
        <li>Stazione Arrivo: {{ $item['arrival_station'] }}</li>
        <li>Data: {{ $item['departure_date'] }}</li>
        <li>Orario Partenza: {{ $item['departure_time'] }}</li>
        <li>Orario Arrivo: {{ $item['arrival_time'] }}</li>
        <li>Codice Treno: {{ $item['train_code'] }}</li>
        <li>Carrozza: {{ $item['carriage_number'] }}</li>
        <li>In Orario: {{ $item['on_time'] }}</li>
        <li>Cancellato: {{ $item['cancelled'] }}</li>
    </ul>
@endforeach
