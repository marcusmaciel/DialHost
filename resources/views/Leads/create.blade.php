@extends('shared.base')

@section('content')

<div class="container">
    <form action="" method="post" name="frm_lead">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="">Nome</label>
            <input name="nome" type="text" class="form-control" required="required" />
        </div>
        <div class="form-group">
            <label for="">E-mail</label>
            <input name="email" type="email" class="form-control" required="required" />
        </div>
        <div class="form-group">
            <label for="">Telefone</label>
            <input name="telefone" type="tel" class="form-control" required="required">
        </div>
    </form>
</div>

@endsection()