@extends('layouts.app') <!-- это мы подключили основной фаил и эта страница будет отображать содержимое файла находящийся по адресу(папка.фаил)-->

@section('title-block')HOME @endsection

@section('content')<!-- отс сюда будет встраиватся код где в файле будет прописано @yield('content')-->


 <h1>HEllo world</h1>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ipsum expedita aut omnis quo eveniet necessitatibus architecto, repellendus perferendis, dolore suscipit. Soluta culpa cupiditate nihil pariatur quia. Ducimus, voluptatibus, fugiat.</p>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo autem, alias at quisquam blanditiis ea illo illum, rerum praesentium voluptas nisi ratione asperiores obcaecati, corrupti voluptatum! Unde autem labore praesentium.</p>
@endsection