<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Salve Admin</h1>
        </div>
    </div>
    <div class="col-12">
        <h4>Hai ricevuto una nuova email</h4>
        <p> <strong>Nome:</strong> {{ $lead->nome }}</p>
        <p> <strong>Cognome:</strong> {{ $lead->cognome }}</p>
        <p> <strong>Email:</strong> {{ $lead->email }}</p>
        <p> <strong>Telefono:</strong> {{ $lead->telefono }}</p>
        <p> <strong>Messaggio:</strong> {{ $lead->messaggio }}</p>
    </div>
</div>
