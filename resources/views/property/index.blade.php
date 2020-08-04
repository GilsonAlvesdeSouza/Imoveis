@extends("layout")

@section("cabecalho")
    Lista De Propriedades
@endsection

@section("conteudo")
    <a href="{{url("/imoveis/novo")}}" class="btn btn-primary">Adicionar</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Descricao</th>
            <th scope="col">Preço Rentável</th>
            <th scope="col">Preço Venda</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        @if(!empty($propriedades))
            @foreach($propriedades as $propriedade)
                <tr>
                    @php
                        $linkVermais = url('/imoveis/' . $propriedade->id);
                        $linkEditar = url('/imoveis/editar/' . $propriedade->id);
                        $linkExcluir = url('imoveis/excluir/' . $propriedade->id);
                    @endphp

                    <td>{{$propriedade->titulo}}</td>
                    <td>{{$propriedade->descricao}}</td>
                    <td>{{ app(LaraDev\Http\Controllers\PropertyController::class)->formatarMoeda($propriedade->preco_rentavel)}}</td>
                    <td>{{ app(LaraDev\Http\Controllers\PropertyController::class)->formatarMoeda($propriedade->preco_venda)}}</td>
                    <td><a title="Ver Mais" href="{{ $linkVermais }}" style="padding: 2px">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-binoculars" fill="black"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V2.5zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5h-1zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V4zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5V3zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14z"/>
                            </svg>
                        </a>
                        <a title="Editar" href="{{ $linkEditar }}" style="padding: 4px">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pencil" fill="black"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                <path fill-rule="evenodd"
                                      d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                            </svg>
                        </a>
                        <a title="Remover" href="{{ $linkExcluir }}" style="padding: 2px">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="red"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd"
                                      d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
