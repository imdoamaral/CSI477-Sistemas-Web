@extends('app')

@section('conteudo')

    <form action="{{ route('cidades.update', $cidade->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control 
            @error('nome')
                is-invalid
            @enderror" value="{{ old('nome', $cidade) }}">
        </div>

        <div class="mb-3">
            <label for="estado_id" class="form-label">Estado</label>
            
            <select name="estado_id" id="estado_id" class="form-select 
                @error('estado_id') 
                    is-invalid
                @enderror">

                <option value="" selected disabled>Selecione:</option>

                @foreach($estados as $e)
                    <option value="{{ $e->id }}"
                    
                    @if(old('estado_id', $cidade) == $e->id)
                        selected
                    @endif
                    
                    >{{ $e->nome }}</option>
                @endforeach   
            </select> 
            
        </div>


        <div class="mb-3">
            <input type="submit" value="Atualizar" name="atualizar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>


    </form>

@endsection