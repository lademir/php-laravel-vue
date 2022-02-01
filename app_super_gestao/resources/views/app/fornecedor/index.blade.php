<h3>
    Fornecedor
</h3>



@php
// comentario de uma linha
// echo "php puro dentro do blade";
//  if(isset($var))  retorna true caso $var esteja definida
@endphp



@isset($fornecedores)
    Fornecedor: {{ $fornecedores[$numero]['nome'] }}
    <br />
    Status: {{ $fornecedores[$numero]['status'] == 'N' ? 'Fornecedor inativo' : 'Fornecedor Ativo' }}
    <br>
    CNPJ: {{ $fornecedores[$numero]['cnpj'] ?? "Nao informado" }}
    
@endisset




{{-- Comentario --}}
<!-- comentario -->
