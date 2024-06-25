<div class="col-md-12">
    <botton class="btn btn-primary">
        <h1> Esta é a página de contato </h1>
        <a href="/"> Voltar para a página inicial </a>
    </botton>
</div>
<body>
    {{-- @if(10 > 5)
        <p> A condição é verdadeira </p>
    @endif

    <p> Bem vindo {{ $nome }}!! </p>

    @if($nome == "William")
        <p> Seu nome é {{ $nome }} </p>
    @else
        <p> Seu nome não é William </p>
    @endif --}}

    <p> Seu nome é {{ $nome }} e você tem {{ $idade }} anos e você trabalha como {{$profissao}}.</p>

    @for($i = 0; $i < count($array); $i++)
        <p> {{$array[$i]}} - O valor de i é = {{$array[$i]}} </p>
    @endfor

    @foreach($nomes as $nome)
        <p>{{$nome}}</p>
    @endforeach
<body>