<?php $title = isset($item) ? $item->name: "Creer une categorie" ?>

<div class="row">
  <div class="col-sm-8">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">{!! $title !!}</h3>
      </div>
      <div class="box-body">

        {!! Form::myInput('text', 'name', 'Titre', ['required']) !!}

        {!! Form::mySelect('parent_id', 'Categorie mére', ['' => ''] + App\Category::lists('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}

        {!! Form::mySelect('language_id', 'Langue', ['' => ''] + Config::get('variables.langues'), null, ['class'=>'form-control', 'required']) !!}
       

      </div>
    </div>

  </div>
</div>