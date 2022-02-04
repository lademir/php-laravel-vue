<h3>
    Fornecedor
</h3>



@php
// comentario de uma linha
// echo "php puro dentro do blade";
//  if(isset($var))  retorna true caso $var esteja definida
@endphp



@isset($fornecedores)

    @forelse ($fornecedores as $index => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] ?? ' ' }}
        <br />
        Status: {{ $fornecedor['status'] == 'N' ? 'Fornecedor inativo' : 'Fornecedor Ativo' }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Nao informado' }}
        <br>
        <hr>
        @empty
            Nao existem fornecedores cadastrados
    @endforelse

@endisset




{{-- Comentario --}}
<!-- comentario -->
