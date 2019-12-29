@extends("layouts.apps")
@section("title")
Tentang Kami
@endsection
@section("sidebar")
@parent
Sidebar dari halaman tentang kami
@endsection

@section("content")
Kami adalah Fullstack Developer yang penuh passion untuk memecahkan
masalah yang Anda miliki melalui aplikasi yang kami bangun!
@endsection
@component("alert")
<b>Tulisan ini akan mengisi variabel $slot</b>
@endcomponent