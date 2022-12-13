@extends('dashboard.main')
@section('content')
   <div class="header-schedule shadow-1">
      <div class="d-flex align-items-center px-4">
         <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
         <span class="text-white mx-auto">Tambah Data Buku</span>
      </div>
   </div>
   <main class="mb-4">
      <div class="container">
         <div class="row justify-content-center ">
            <div class="col-md-11">
               <div class="row d-flex justify-content-evenly px-5">
                  <form action="{{ route('tambah_buku.create') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     @include('dashboard.fasilitas.perpustakaan.buku_perpustakaan._form.form')
                  </form>
               </div>
            </div>
         </div>
      </div>
   </main>
@endsection
