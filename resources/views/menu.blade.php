<x-app-layout>
    <div class="main-div-home">
    <h1>Menu</h1>


    @auth 

        <form action="/menu/create" method="POST">

            @csrf
            <input type="text" name='nome' placeholder="nome">
            <input type="text" name='categoria' placeholder="categoria">
            <input type="text" name='preco' placeholder="valor">
            <button>Cadastrar</button>
        </form>




    @endauth

    <div class="main-div-home">

        
        @foreach($produtos as $produto)

        <form action="menu/show/{{$produto->id}}" method="GET">
                @csrf
                <button  name="produto" value="{{ $produto->id }}">
                    <div class="div-product">
            
                            {{ $produto->nome }}
                            {{ $produto->categoria }}
                            {{ $produto->preco }} R$
            
            
                    </div>
                </button>
        </form>

        @endforeach
    </div>

    </div>
</x-app-layout>
