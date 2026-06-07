<h2>Nuevo mensaje de contacto</h2>
<p><strong>Nombre:</strong> {{ $data['name'] }}</p>
<p><strong>Empresa:</strong> {{ $data['company'] ?? '—' }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Teléfono:</strong> {{ $data['phone'] ?? '—' }}</p>
<p><strong>Mensaje:</strong></p>
<p>{{ $data['message'] }}</p>